<?php
namespace App\Http\interfaces\Admin;

use App\Http\Requests\FaqRequests\createFaqRequest;
use App\Http\Requests\FaqRequests\deleteFaqRequest;
use App\Http\Requests\FaqRequests\updateFaqRequest;


interface faqInterface
{
    public function createFaq ();

    public function storeFaq (createFaqRequest $request);

    public function viewFaqs ();

    public function deleteFaq (deleteFaqRequest $request);


    public function editFaq ($faqId);

    public function updateFaq (updateFaqRequest $request);
    
}
?>