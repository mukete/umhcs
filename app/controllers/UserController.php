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
          return 'display login';
      }

      public function postLogin()
      {
          return 'processing login';
      }

      public function getRegister()
      {
          return 'register form';
      }

      public function postRegister()
      {
          return 'processing regster data';
      }
  }
