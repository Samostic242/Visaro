<?php

namespace App\Interfaces\Repositories\V2\Admin;

interface UserRepositoryInterface
{
    /* *
     * Get all users.
     *
     * @return array
     */
    public function getAll();

    public function getSingleUser(string $Id);

    /* *
     * Get a user by ID.
     *
     * @param int $id
     * @return \App\Models\User
     */
    // public function getById($id);


    public function fetchUserOverview();

    /**
     * Update a user.
     *
     * @param int $id
     * @param array $data
     * @return \App\Models\User
     */
    // public function update($id, array $data);

    /**
     * Delete a user.
     *
     * @param int $id
     * @return void
     */
    // public function delete($id);
}
