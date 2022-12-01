<?php

namespace App\Repositories;


use App\Contracts\Repositories\UserRepositoryInterface;
use App\Models\User;



class UserRepository implements UserRepositoryInterface
{


	/**
	 * @return mixed
	 */
	public function getByIdDESCAll() {
		$usersDESC=User::orderByDESC('id')->get();
        return $usersDESC;
	}

	/**
	 * @return mixed
	 */
	public function getByIdASCAll() {
		$usersASC=User::orderBy('id')->get();
        return $usersASC;
	}

	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function getById($id) {
		return User::where('id',$id)->first();
	}

	/**
	 *
	 * @param mixed $id
	 * @return mixed
	 */
	public function deleteById($id) {
		return User::whereId($id)->delete();
	}

	/**
	 *
	 * @param array $data
	 * @return mixed
	 */
	public function insert(array $data) {
		return User::create($data);
	}

	/**
	 *
	 * @param mixed $id
	 * @param array $data
	 * @return mixed
	 */
	public function update($id, array $data) {
		return User::whereId($id)->update($data);
	}
}

