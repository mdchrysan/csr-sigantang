<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class Admin_feedback extends BaseController
{
    public function index()
    {
        $this->feedbackModel = new FeedbackModel();
        $feedback = $this->feedbackModel->findAll();

        $data = [
            'title' => 'Admin | Sigantang',
            'feedback' => $feedback
        ];
        return view('admin/feedback/dashboard', $data);
    }
}
