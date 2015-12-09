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
        return View::make('website.provider.personal');
    }

    public function postPersonal()
    {
        return Input::all();

        $validationRules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'ssn' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'race' => 'required',
            );
        $formxValidator = Validator::make(Input::all(), $validationRules);
    }

    public function getContact()
    {
        return View::make('website.provider.contact');
    }

    public function postContact()
    {
        return Input::all();
    }

    public function getProfessional()
    {
        return View::make('website.provider.professional');
    }

    public function postProfessional()
    {
        return Input::all();
    }

    public function getEducational()
    {
        return View::make('website.provider.education');
    }

    public function postEducational()
    {
        return Input::all();
    }

    public function getTerm()
    {
        return View::make('website.provider.term');
    }

    public function postTerm()
    {
        return Input::all();
    }

    public function getSummary()
    {
        return View::make('website.provider.summary');
    }

    public function postSummary()
    {
        return 'Provider profile Was Successfully Updated';
    }
}
