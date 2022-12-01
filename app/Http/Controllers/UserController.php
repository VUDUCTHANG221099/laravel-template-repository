<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller implements AbstractInterface
{

    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


	/**
	 * @return mixed
	 */
	public function index() {
	}

	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function getByIdFirst($id) {
	}

	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function deleteByIdFirst($id) {
	}

	/**
	 *
	 * @param Request $request
	 * @return mixed
	 */
	public function insertOne(Request $request) {
	}

	/**
	 * @return mixed
	 */
	public function insertView() {
	}

	/**
	 *
	 * @param mixed $id
	 * @param Request $request
	 * @return mixed
	 */
	public function updateOne($id, Request $request) {
	}

	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function updateView($id) {
	}
}
