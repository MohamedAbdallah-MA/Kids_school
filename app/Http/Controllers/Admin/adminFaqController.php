<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\interfaces\Admin\faqInterface;
use App\Http\Requests\FaqRequests\createFaqRequest;
use App\Http\Requests\FaqRequests\deleteFaqRequest;
use App\Http\Requests\FaqRequests\updateFaqRequest;


class adminFaqController extends Controller
{
    public $faqInterface ;

    public function __construct (faqInterface $faq)
    {
        $this->faqInterface = $faq ;
    }

    public function createFaq ()
    {
        return $this->faqInterface->createFaq() ;
    }

    public function storeFaq (createFaqRequest $request)
    {
        return $this->faqInterface->storeFaq($request) ;

    }

    public function viewFaqs ()
    {
        return $this->faqInterface->viewFaqs() ;

    }

    public function deleteFaq (deleteFaqRequest $request)
    {
        return $this->faqInterface->deleteFaq($request) ;

    }


    public function editFaq ($faqId)
    {
        return $this->faqInterface->editFaq($faqId) ;

    }

    public function updateFaq (updateFaqRequest $request)
    {
        return $this->faqInterface->updateFaq($request) ;

    }

}
