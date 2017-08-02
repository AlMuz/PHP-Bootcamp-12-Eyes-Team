<?php

namespace NewsSite\Controllers;

class EmailController extends StaticPageController
{

    public function emailAction()
    {
        /** @var \NewsSite\Models\Email $email */
        $email = $this->container->get('model.email');

        $email->sendEmail();

        return $this->contactAction();

    }

}
