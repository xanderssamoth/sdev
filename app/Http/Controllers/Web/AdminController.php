<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiClientManager;

/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */
class AdminController extends Controller
{
    public static $api_client_manager;

    public function __construct()
    {
        $this::$api_client_manager = new ApiClientManager();
    }

    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: Admin home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Find all messages API URL
        $all_messages = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/api/message';
        // Find all messages API calling
        $messages = $this::$api_client_manager->call('GET', $all_messages);
        // Find all projects API URL
        $all_projects = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/api/project';
        // Find all projects API calling
        $projects = $this::$api_client_manager->call('GET', $all_projects);
        // Find all collaborators API URL
        $all_collaborators = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/api/user/find_by_role/Collaborateur';
        // Find all collaborators API calling
        $collaborators = $this::$api_client_manager->call('GET', $all_collaborators);

        return view('dashboard', [
            'messages' => $messages->data,
            'projects' => $projects->data,
            'collaborators' => $collaborators->data,
        ]);
    }

    /**
     * GET: Account page
     *
     * @return \Illuminate\View\View
     */
    public function account()
    {
        return view('admin.account');
    }

    /**
     * GET: Message page
     *
     * @return \Illuminate\View\View
     */
    public function message()
    {
        return view('admin.message');
    }

    /**
     * GET: Project page
     *
     * @return \Illuminate\View\View
     */
    public function project()
    {
        return view('admin.project');
    }

    /**
     * GET: Team page
     *
     * @return \Illuminate\View\View
     */
    public function team()
    {
        return view('admin.team');
    }

    // ==================================== HTTP POST METHODS ====================================
    /**
     * POST: Update account
     *
     * @return 
     */
    public function updateAccount()
    {
        //
    }

    /**
     * POST: Add a project
     *
     * @return 
     */
    public function addProject()
    {
        //
    }

    /**
     * POST: Add a team member
     *
     * @return 
     */
    public function addMember()
    {
        //
    }
}
