<?php

namespace Kwiki;

use Illuminate\Routing\Controller;
use Pagemark\Pagemark;

class KwikiController extends Controller
{
    /**
     * The path to the directory containing your markdown files and folders,
     * relative to the project root (app path).
     *
     * @var string
     */
    private $kwikiPath;

    /**
     * The view to use for the wiki pages relative to the resources/views
     * folder and separated by dot notation.
     *
     * @var string
     */
    private $kwikiView;

    /**
     * @var Pagemark
     */
    private $pagemark;

    /**
     * @param Pagemark $pagemark
     * @param string $kwikiPath
     * @param string $kwikiView
     */
    public function __construct(Pagemark $pagemark, $kwikiPath, $kwikiView)
    {
        $this->pagemark = $pagemark;
        $this->kwikiPath = $kwikiPath;
        $this->kwikiView = $kwikiView;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function makePage()
    {
        $kwikiPath = base_path($this->kwikiPath);
        $post = implode('/', func_get_args());

        $content = $this->pagemark->getContent($kwikiPath, $post);

        return view($this->kwikiView, $content);
    }
}
