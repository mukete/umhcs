<?php

/**
 * Provider registration completion form process controller.
 *
 * @author Mukete ...
 */
class ProviderController extends BaseController
{
    public function getPersonal()
    {
        $data['races'] = Race::all();

        return View::make('website.provider.personal')->with($data);
    }

    public function postPersonal()
    {
        $validationRules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'ssn' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'race' => 'required',
            );
        $formValidator = Validator::make(Input::all(), $validationRules);

        if ($formValidator->passes()) {
            // save details to database and go to next step

            $updateUser = User::find(Auth::user()->id);
            $updateUser->first_name = Input::get('first_name');
            $updateUser->last_name = Input::get('last_name');
            $updateUser->dob = Input::get('dob');
            $updateUser->ssn = Input::get('ssn');
            $updateUser->gender = Input::get('gender');
            $updateUser->marital_status = Input::get('marital_status');
            $updateUser->race_id = Input::get('race');
            $updateUser->save();

            return Redirect::to('provider/contact');
        } else {
            return Redirect::back()->withInput()->withErrors($formValidator);
        }
    }

    public function getContact()
    {
        $data['countries'] = Country::all();
        $data['physician'] = User::find(Auth::user()->id)->physician;

        return View::make('website.provider.contact')->with($data);
    }

    public function postContact()
    {
        $validationRules = array(
            'country_origin' => 'required',
            'nationality' => 'required',
            'residence_address' => 'required',
            'residence_email' => 'required',
            'residence_phone' => 'required',
            'residence_fax' => 'required',
            'skype' => 'required',
            'facebook' => 'required',
            'country_serve' => 'required',
            'contact_date' => 'required',
            );
        $formValidator = Validator::make(Input::all(), $validationRules);

        if ($formValidator->passes()) {
            // save details to database and go to next step
            $updatePhysician = User::find(Auth::user()->id)->physician;

            $updatePhysician->country_origin = Input::get('country_origin');
            $updatePhysician->nationality = Input::get('nationality');
            $updatePhysician->residence_address = Input::get('residence_address');
            $updatePhysician->residence_email = Input::get('residence_email');
            $updatePhysician->residence_phone = Input::get('residence_phone');
            $updatePhysician->residence_fax = Input::get('residence_fax');
            $updatePhysician->skype = Input::get('skype');
            $updatePhysician->facebook = Input::get('facebook');
            $updatePhysician->country_serve = Input::get('country_serve');
            $updatePhysician->contact_date = Input::get('contact_date');
            $updatePhysician->save();

            return Redirect::to('provider/professional');
        } else {
            return Redirect::back()->withInput()->withErrors($formValidator);
        }
    }

    public function getProfessional()
    {
        $data['physician'] = User::find(Auth::user()->id)->physician;

        return View::make('website.provider.professional')->with($data);
    }

    public function postProfessional()
    {
        $validationRules = array(
            'profession' => 'required',
            'specialities' => 'required',
            'licence' => 'required',
            'licensure_country' => 'required',
            'licensure_state' => 'required',
            'practice_name' => 'required',
            'practice_address' => 'required',
            'practice_phone' => 'required',
            'practice_email' => 'required|email',
            'practice_fax' => 'required',
            'practice_website' => 'required|url',
            );
        $formValidator = Validator::make(Input::all(), $validationRules);

        if ($formValidator->passes()) {
            // save details to database and go to next step
            $updatePhysician = User::find(Auth::user()->id)->physician;

            $updatePhysician->profession = Input::get('profession');
            $updatePhysician->specialities = Input::get('specialities');
            $updatePhysician->licence = Input::get('licence');
            $updatePhysician->licensure_country = Input::get('licensure_country');
            $updatePhysician->licensure_state = Input::get('licensure_state');
            $updatePhysician->practice_name = Input::get('practice_name');
            $updatePhysician->practice_address = Input::get('practice_address');
            $updatePhysician->practice_phone = Input::get('practice_phone');
            $updatePhysician->practice_email = Input::get('practice_email');
            $updatePhysician->practice_fax = Input::get('practice_fax');
            $updatePhysician->practice_website = Input::get('practice_website');
            $updatePhysician->save();

            return Redirect::to('provider/education');
        } else {
            return Redirect::back()->withInput()->withErrors($formValidator);
        }
    }

    public function getEducation()
    {
        $data['physician'] = User::find(Auth::user()->id)->physician;

        return View::make('website.provider.education')->with($data);
    }

    public function postEducation()
    {
        $validationRules = array(
            'current_employer_name' => 'required',
            'current_employer_email' => 'required|email',
            'current_employer_phone' => 'required',
            'current_employer_address' => 'required',
            'current_employer_fax' => 'required',
            'current_employer_website' => 'required|url',
            'current_employer_contact_phone' => 'required',
            'current_employer_contact_email' => 'required|email',
            'passport_photo' => 'required|max:500|mimes:jpeg,png,jpg,gif',
            'resume' => 'required|max:500|required|mimes:docs,docx,pdf,rtf',
            );
        $formValidator = Validator::make(Input::all(), $validationRules);

        if ($formValidator->passes()) {
            // save details to database and go to next step
            $resumeFile = Auth::user()->email.'_resume_.'.Input::file('resume')->getClientOriginalExtension();
            $photoFile = Auth::user()->email.'_photo_.'.Input::file('passport_photo')->getClientOriginalExtension();

            Input::file('resume')->move(public_path().'/resumes/', $resumeFile);
            Input::file('passport_photo')->move(public_path().'/photos/', $photoFile);

            $updatePhysician = User::find(Auth::user()->id)->physician;

            $updatePhysician->current_employer_name = Input::get('current_employer_name');
            $updatePhysician->current_employer_email = Input::get('current_employer_email');
            $updatePhysician->current_employer_phone = Input::get('current_employer_phone');
            $updatePhysician->current_employer_address = Input::get('current_employer_address');
            $updatePhysician->current_employer_fax = Input::get('current_employer_fax');
            $updatePhysician->current_employer_website = Input::get('current_employer_website');
            $updatePhysician->current_employer_contact_phone = Input::get('current_employer_contact_phone');
            $updatePhysician->current_employer_contact_email = Input::get('current_employer_contact_email');

            $updatePhysician->passport_photo = $photoFile;
            $updatePhysician->resume = $resumeFile;

            $updatePhysician->save();

            return Redirect::to('provider/term');
        } else {
            return Redirect::back()->withInput()->withErrors($formValidator);
        }
    }

    public function getTerm()
    {
        return View::make('website.provider.term');
    }

    public function postTerm()
    {
        $validationRules = array(
            'term' => 'required',
            );
        $formValidator = Validator::make(Input::all(), $validationRules);

        if ($formValidator->passes()) {
            // save details to database and go to next step
            return Redirect::to('provider/summary');
        } else {
            return Redirect::back()->withInput()->withErrors($formValidator);
        }
    }

    public function getSummary()
    {
        $data['physician'] = User::find(Auth::user()->id)->physician;

        return View::make('website.provider.summary')->with($data);
    }

    public function postSummary()
    {
        $updateUser = User::find(Auth::user()->id);
        $updateUser->status = 'ON';
        $updateUser->save();

        return Redirect::to('physician');
    }
}
