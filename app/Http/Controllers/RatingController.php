<?php

namespace App\Http\Controllers;

use App\Modules\Rating\Services\RatingService;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    private $_service;

    public function __construct(RatingService $ratingService)
    {
        $this->_service = $ratingService;
    }

    public function all($topicId, $ratableId)
    {
        return $this->_service->all($topicId, $ratableId);
    }

    public function add($topicId, $ratableId, Request $request)
    {
        $data = $request->all();

        return $this->_service->add($topicId, $ratableId, $data);
    }

    public function remove($topicId, $ratableId, $id)
    {
        return $this->_service->remove($topicId, $ratableId, $id);
    }
}