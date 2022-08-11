<?php

namespace App\Http\Services;

class TableButton
{
    /**
     * @param $route
     * @param $value
     * @return string
     */
    public function deleteButton($route, $value): string
    {
        return '<form method="POST" action="' . route($route, $value) . '"
                     onsubmit="return confirm(\'Are you sure you want to delete?\')" style="display: inline;">
                      <input type="hidden"  name="_token" value="' . csrf_token() . '">
                      <input name="_method" type="hidden" value="DELETE">
                      <button class="btn btn-danger btn-sm" title="Delete"  data-tooltip="tooltip"  type="submit">
                      <i class="fa fa-times"></i></button>
                     </form>';
    }

    public function editButton($route, $value): string
    {
        return '<a class="btn btn-primary btn-sm"
                   title="Edit"   href="' . route($route, $value) . '">
                     <i class="fa fa-edit "></i></a>';
    }

    public function restoreButton($route, $value): string
    {
        return '<form method="POST" action="' . route($route, $value) . '"
                     onsubmit="return confirm(\'Are you sure you want to restore?\')" style="display: inline;">
                      <input type="hidden"  name="_token" value="' . csrf_token() . '">
                      <button class="btn btn-success btn-sm" title="Restore"  data-tooltip="tooltip"  type="submit">
                      <i class="fa fa-trash-restore"></i></button>
                     </form>';
    }

}
