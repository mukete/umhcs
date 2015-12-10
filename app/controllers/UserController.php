<?php



  /**
   * Provider registration completion form process controller.
   *
   * @author Mukete ...
   */
  class UserController extends BaseController
  {
      public function getLogin()
      {
          return View::make('website.user.login');
      }

      public function postLogin()
      {
          if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
              //  check if account is patient or physician then send to appropriate section
              if (Auth::user()->type == 'PHYSICIAN') {
                  // check if user profile is completed, else move to provider longest of all form page so user complete account as physician
                if (Auth::user()->status == 'OFF') {
                    return Redirect::to('provider/personal');
                }
                // else just redirect to physician page
                return Redirect::to('physician');
              }

              if (Auth::user()->type == 'PATIENT') {
                  return Redirect::to('clinic');
              }
          } else {
              return Redirect::back()->with('error', 'Invalid account details');
          }
      }

      public function getRegister()
      {
          $data['a'] = '';

          return View::make('website.user.register')->with($data);
      }

      public function postRegister()
      {
          $validationRules = array(
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'type' => 'required',
            );
          $formValidator = Validator::make(Input::all(), $validationRules);

          if ($formValidator->passes()) {
              // creatting new user
            $createUser = new User();
              $createUser->email = Input::get('email');
              $createUser->type = Input::get('type');
              $createUser->password = Hash::make(Input::get('password'));
              $createUser->status = 'OFF';
              $createUser->save();

            // checking to create if user is patient or physician
            if ($createUser->type == 'PHYSICIAN') {
                $createPhysisician = new Physician();
                $createPhysisician->user_id = $createUser->id;
                $createPhysisician->save();
            }

              if ($createUser->type == 'PATIENT') {
                  $createPatient = new Patient();
                  $createPatient->user_id = $createUser->id;
                  $createPatient->save();
              }

              return Redirect::to('user/login')->with('success', ' Account created, please login');
          } else {
              return Redirect::back()->withInput()->withErrors($formValidator);
          }
      }

      public function getLogout()
      {
          Auth::logout();

          return Redirect::to('/');
      }
  }
