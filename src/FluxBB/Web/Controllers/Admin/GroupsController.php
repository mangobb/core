<?php

namespace FluxBB\Web\Controllers\Admin;

use FluxBB\Server\Exception\ValidationFailed;
use FluxBB\Web\Controller;

class GroupsController extends Controller
{
    public function index()
    {
        // TODO: Retrieve
        $groups = null;

        return $this->view('admin.groups.index', compact('groups'));
    }

    public function edit()
    {
        // TODO: Retrieve
        $group = null;

        return $this->view('admin.groups.edit', compact('group'));
    }

    public function update()
    {
        try {
            // Update group

            return $this->redirect('admin_groups_edit', 'Group was updated successfully.'); // TODO: params
        } catch (ValidationFailed $e) {
            return $this->redirect('admin_groups_edit'); // TODO: params
        }
    }

    public function delete()
    {
        // TODO: Retrieve
        $group = null;

        return $this->view('admin.groups.delete', compact('group'));
    }

    public function remove()
    {
        // Delete group

        return $this->redirect('admin_groups_index');
    }
}
