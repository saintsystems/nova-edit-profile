<?php

namespace SaintSystems\Nova\EditProfile;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool as BaseTool;

class EditProfile extends BaseTool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-edit-profile', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-edit-profile', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-edit-profile::navigation');
    }
}
