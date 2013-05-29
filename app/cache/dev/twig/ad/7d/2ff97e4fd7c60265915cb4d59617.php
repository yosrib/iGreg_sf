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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allClient"]) ? $context["allClient"] : $this->getContext($context, "allClient")));
        foreach ($context['_seq'] as $context["_key"] => $context["pjt"]) {
            // line 10
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pjt"]) ? $context["pjt"] : $this->getContext($context, "pjt")), "nomClient"), "html", null, true);
            echo "<br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pjt'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 12
        echo "<div class=\"row-fluid\">
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
        // line 43
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
        // line 60
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
        // line 77
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
        // line 94
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
        // line 111
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
        // line 128
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
        // line 145
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
        // line 162
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
        // line 179
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
        // line 196
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
        // line 213
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
        // line 230
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
        // line 247
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
        // line 264
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
        // line 281
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
        // line 298
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
        // line 315
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
        // line 332
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
        // line 349
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
        // line 366
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
        // line 383
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
        // line 400
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
        // line 417
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
        // line 434
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
        // line 451
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
        // line 468
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
        // line 485
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
        // line 502
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

    // line 526
    public function block_css($context, array $blocks = array())
    {
        // line 527
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/chosen/chosen/chosen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 529
    public function block_javascripts($context, array $blocks = array())
    {
        // line 530
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
        return array (  666 => 530,  663 => 529,  656 => 527,  653 => 526,  626 => 502,  606 => 485,  586 => 468,  566 => 451,  546 => 434,  526 => 417,  506 => 400,  486 => 383,  466 => 366,  446 => 349,  426 => 332,  406 => 315,  386 => 298,  366 => 281,  346 => 264,  326 => 247,  306 => 230,  286 => 213,  266 => 196,  246 => 179,  226 => 162,  206 => 145,  186 => 128,  166 => 111,  146 => 94,  126 => 77,  106 => 60,  86 => 43,  53 => 12,  44 => 10,  40 => 9,  37 => 8,  31 => 4,);
    }
}
