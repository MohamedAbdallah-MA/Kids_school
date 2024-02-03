<?php 
namespace App\Http\repositories\Admin;
use App\Models\Faq;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\interfaces\Admin\faqInterface;
use App\Http\Requests\FaqRequests\createFaqRequest;
use App\Http\Requests\FaqRequests\deleteFaqRequest;
use App\Http\Requests\FaqRequests\updateFaqRequest;


class faqRepository implements faqInterface
{
    public $faqModel ;

    public function __construct (Faq $faq)
    {
        $this->faqModel = $faq ;
    }

    public function createFaq ()
    {
        return view('Admin.faq.create');
    }

    public function storeFaq (createFaqRequest $request)
    {
        $this->faqModel::create([
            'question' => $request->question ,
            'answer' => $request->answer
        ]) ;
        Alert::success('done' , 'faq added successfully');
        return redirect()->back();
    }

    public function viewFaqs ()
    {
        $faqs = $this->faqModel::get();
        return view('Admin.faq.faqs' , compact('faqs'));
    }

    public function deleteFaq (deleteFaqRequest $request)
    {
        $this->faqModel::where('id' , $request->faqId)->delete();

        Alert::success('deleted' , 'faq deleted successfully');
        return redirect()->back();
    }


    public function editFaq ($faqId)
    {
        $faq = $this->faqModel::find($faqId) ;

        return view('Admin/faq/edit' , compact('faq'));
    }

    public function updateFaq (updateFaqRequest $request)
    {
        $faq = $this->faqModel::find($request->faqId);
        $faq->update([
            'question' => $request->question ,
            'answer' => $request->answer
        ]);

        Alert::success('updated' , 'faq updated successfully');
        return redirect(route('admin.faq.view')) ;
    }
}

?>