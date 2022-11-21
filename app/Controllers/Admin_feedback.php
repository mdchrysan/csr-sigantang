<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class Admin_feedback extends BaseController
{
    public function index()
    {
        $this->feedbackModel = new FeedbackModel();
        // perPage parameter linked to number increment on views
        $feedback = $this->feedbackModel->paginate(4, 'feedback');
        $pager = $this->feedbackModel->pager;

        // set default page if not stated
        $currentPage = $this->request->getVar('page_feedback') ? $this->request->getVar('page_feedback') : 1;

        $data = [
            'title'         => 'Admin | Sigantang',
            'feedback'      => $feedback,
            'pager'         => $pager,
            'currentPage'   => $currentPage
        ];
        return view('admin/feedback/dashboard', $data);
    }
}
