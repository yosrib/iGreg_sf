<?php

/* AdminAdminBundle:Projet:index.html.twig */
class __TwigTemplate_ad7d2ff97e4fd7c60265915cb4d59617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'css' => array($this, 'block_css'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Admin iGereg";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"row-fluid\">
        <div class=\"box \">
          <div class=\"title\">
          \t<div class=\"btn-toolbar pull-right \">
            \t<div class=\"btn-group\"> <a class=\"btn\">Ajouter +</a> <a class=\"btn change_color_outside\"><i class=\"paint_bucket\"></i></a> </div>
            </div>
            <h4> <span>Liste des projets<small>(column sorting, live search, pagination)</small></span> </h4>
          </div>
          <!-- End .title -->
          
          <div class=\"content top\">
            <table id=\"datatable_example\" class=\"responsive table table-striped table-bordered\" style=\"width:100%;margin-bottom:0; \">
              <thead>
                <tr>
                  <th class=\"jv no_sort\"><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></th>
                  <th class=\"jv no_sort\">Image</th>
                  <th class=\"to_hide_phone  no_sort\">Description</th>
                  <th class=\"to_hide_phone ue no_sort\">Info</th>
                  <th class=\"\">Author</th>
                  <th class=\"to_hide_phone span2\">Views</th>
                  <th class=\"ue no_sort\"><i class=\"icon-comments big\"></i></th>
                  <th class=\"ms no_sort \">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar4.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Full price for gum?!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 196 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">46,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >14</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar1.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Surrender your mysteries to Zoidberg!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 82 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .jpg</div>
                      </small></div></td>
                  <td>Zoidberg</td>
                  <td class=\"to_hide_phone\">16,67% <span class=\"line\">1,1,2,-1,-3,-2,2,4,5,2</span></td>
                  <td >21</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">The point is, by my standards, I won fair and square.</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 392 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Bender</td>
                  <td class=\"to_hide_phone\">26,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >12</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\"> File not found?!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 403 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .gif</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">7,32% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >2</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">I'm Santa Claus!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 546 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .jpg</div>
                      </small></div></td>
                  <td>Simpson</td>
                  <td class=\"to_hide_phone\">48,33% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >17</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">And I'd do it again! And perhaps a third time!!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 294 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">88,22% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >0</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Perfectly symmetrical violence never solved anything.</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 9.996 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .psd</div>
                      </small></div></td>
                  <td>Leela</td>
                  <td class=\"to_hide_phone\">99,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >93</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Full price for gum?!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 196 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">46,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >14</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Surrender your mysteries to Zoidberg!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 82 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .jpg</div>
                      </small></div></td>
                  <td>Zoidberg</td>
                  <td class=\"to_hide_phone\">16,67% <span class=\"line\">1,1,2,-1,-3,-2,2,4,5,2</span></td>
                  <td >21</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">The point is, by my standards, I won fair and square.</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 392 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Bender</td>
                  <td class=\"to_hide_phone\">26,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >12</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\"> File not found?!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 403 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .gif</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">7,32% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >2</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">I'm Santa Claus!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 546 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .jpg</div>
                      </small></div></td>
                  <td>Simpson</td>
                  <td class=\"to_hide_phone\">48,33% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >17</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">And I'd do it again! And perhaps a third time!!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 294 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">88,22% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >0</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Perfectly symmetrical violence never solved anything.</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 9.996 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .psd</div>
                      </small></div></td>
                  <td>Leela</td>
                  <td class=\"to_hide_phone\">99,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >93</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Full price for gum?!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 196 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">46,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >14</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Surrender your mysteries to Zoidberg!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 82 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .jpg</div>
                      </small></div></td>
                  <td>Zoidberg</td>
                  <td class=\"to_hide_phone\">16,67% <span class=\"line\">1,1,2,-1,-3,-2,2,4,5,2</span></td>
                  <td >21</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">The point is, by my standards, I won fair and square.</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 392 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Bender</td>
                  <td class=\"to_hide_phone\">26,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >12</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\"> File not found?!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 403 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .gif</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">7,32% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >2</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">I'm Santa Claus!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 546 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .jpg</div>
                      </small></div></td>
                  <td>Simpson</td>
                  <td class=\"to_hide_phone\">48,33% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >17</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">And I'd do it again! And perhaps a third time!!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 294 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">88,22% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >0</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Perfectly symmetrical violence never solved anything.</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 9.996 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .psd</div>
                      </small></div></td>
                  <td>Leela</td>
                  <td class=\"to_hide_phone\">99,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >93</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Full price for gum?!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 196 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">46,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >14</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Surrender your mysteries to Zoidberg!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 82 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .jpg</div>
                      </small></div></td>
                  <td>Zoidberg</td>
                  <td class=\"to_hide_phone\">16,67% <span class=\"line\">1,1,2,-1,-3,-2,2,4,5,2</span></td>
                  <td >21</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">The point is, by my standards, I won fair and square.</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 392 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Bender</td>
                  <td class=\"to_hide_phone\">26,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >12</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\"> File not found?!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 403 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .gif</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">7,32% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >2</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">I'm Santa Claus!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 546 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .jpg</div>
                      </small></div></td>
                  <td>Simpson</td>
                  <td class=\"to_hide_phone\">48,33% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >17</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">And I'd do it again! And perhaps a third time!!</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 294 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .png</div>
                      </small></div></td>
                  <td>Fry</td>
                  <td class=\"to_hide_phone\">88,22% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >0</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
                <tr>
                  <td><label class=\"checkbox \">
                      <input type=\"checkbox\">
                    </label></td>
                  <td><img class=\"thumbnail small\" src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/message_avatar2.png"), "html", null, true);
        echo "\"></td>
                  <td class=\"to_hide_phone\">Perfectly symmetrical violence never solved anything.</td>
                  <td class=\"to_hide_phone\"><div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Size:</strong> 9.996 Kb</div>
                      </small></div>
                    <div class=\"row-fluid\"><small>
                      <div class=\"span12\"><strong>Format:</strong> .psd</div>
                      </small></div></td>
                  <td>Leela</td>
                  <td class=\"to_hide_phone\">99,67% <span class=\"line\">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td >93</td>
                  <td class=\"ms\"><div class=\"btn-group\"> <a class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \"><i class=\"gicon-edit\"></i></a> <a class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"top\" data-original-title=\"View\"><i class=\"gicon-eye-open\"></i></a> <a class=\"btn  btn-small\" rel=\"tooltip\" data-placement=\"bottom\" data-original-title=\"Remove\"><i class=\"gicon-remove \"></i></a> </div></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- End .content --> 
        </div>
        <!-- End box --> 
      </div>
      <!-- End .row-fluid --> 
      
";
    }

    // line 524
    public function block_css($context, array $blocks = array())
    {
        // line 525
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/chosen/chosen/chosen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 527
    public function block_javascripts($context, array $blocks = array())
    {
        // line 528
        echo "<script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/chosen/chosen/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">

\t\$(\"#sidebar_menu_sites\").addClass(\"active opened\");
\t\$(\"#sidebar_menu_sites > a\").removeClass(\"collapsed\");
\t\$(\"#sidebar_menu_sites > ul\").addClass(\"in\");
\t\$(\"#collapse1 li.projets\").addClass(\"active\");


  /**** Specific JS for this page ****/
  // Datatables

    
      var dontSort = [];
                \$('#datatable_example thead th').each( function () {
                    if ( \$(this).hasClass( 'no_sort' )) {
                        dontSort.push( { 'bSortable': false } );
                    } else {
                        dontSort.push( null );
                    }
      } );
      \$('#datatable_example').dataTable( {
        \"sDom\": \"<'row-fluid table_top_bar'<'span12'<'to_hide_phone' f>>>t<'row-fluid control-group full top' <'span4 to_hide_tablet'l><'span8 pagination'p>>\",
         \"aaSorting\": [[ 1, \"asc\" ]],
        \"bPaginate\": true,

        \"sPaginationType\": \"full_numbers\",
        \"bJQueryUI\": false,
        \"aoColumns\": dontSort,
        
      } );
      \$.extend( \$.fn.dataTableExt.oStdClasses, {
        \"s`\": \"dataTables_wrapper form-inline\"
      } );

       \$(\".chzn-select, .dataTables_length select\").chosen({
                   disable_search_threshold: 10

        });

  


</script>

";
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 528,  651 => 527,  644 => 525,  641 => 524,  614 => 500,  594 => 483,  574 => 466,  554 => 449,  534 => 432,  514 => 415,  494 => 398,  474 => 381,  454 => 364,  434 => 347,  414 => 330,  394 => 313,  374 => 296,  354 => 279,  334 => 262,  314 => 245,  294 => 228,  274 => 211,  254 => 194,  234 => 177,  214 => 160,  194 => 143,  174 => 126,  154 => 109,  134 => 92,  114 => 75,  94 => 58,  74 => 41,  40 => 9,  37 => 8,  31 => 4,);
    }
}
