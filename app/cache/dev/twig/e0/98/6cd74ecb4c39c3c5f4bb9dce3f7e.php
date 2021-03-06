<?php

/* AdminAdminBundle::layout.html.twig */
class __TwigTemplate_e0986cd74ecb4c39c3c5f4bb9dce3f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"sidebar_default  no-js\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/images/favicon.png"), "html", null, true);
        echo " \">
    <!-- Le styles -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/twitter/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/twitter/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/css/jquery-ui-1.8.23.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/modernizr.custom.32549.js"), "html", null, true);
        echo "\"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/html5.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
    ";
        // line 20
        $this->displayBlock('css', $context, $blocks);
        // line 21
        echo "    
    
</head>

<body>
    <div id=\"loading\"><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/ajax-loader.gif"), "html", null, true);
        echo "\" /></div>
<div id=\"responsive_part\">
  <div class=\"logo\"> <a href=\"\"><span>iGreg</span><span class=\"icon\"></span></a> </div>
  <ul class=\"nav responsive\">
    <li>
      <button class=\"btn responsive_menu icon_item\" data-toggle=\"collapse\" data-target=\".overview\"> <i class=\"icon-reorder\"></i> </button>
    </li>
  </ul>
</div>
<!-- Responsive part -->

<div id=\"sidebar\" class=\"\">
\t<div class=\"scrollbar\">
\t\t<div class=\"track\">
      \t\t<div class=\"thumb\">
        \t\t<div class=\"end\"></div>
      \t\t</div>
    \t</div>
  \t</div>
  \t<div class=\"viewport \">
    \t<div class=\"overview collapse\">
      \t\t<div class=\"search row-fluid container\">
        \t\t<h2>Recherche</h2>
        \t\t<form class=\"form-search\">
          \t\t\t<div class=\"input-append\">
\t            \t\t<input type=\"text\" class=\" search-query\" placeholder=\"\">
\t            \t\t<button class=\"btn_search color_8\">Recherche</button>
          \t\t\t</div>
        \t\t</form>
      \t\t</div>
      \t\t<ul id=\"sidebar_menu\" class=\"navbar nav nav-list container full\">
        \t\t<li id=\"sidebar_menu_dashboard\" class=\"accordion-group color_4\">
\t\t        \t<a class=\"dashboard \" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_admin_index"), "html", null, true);
        echo "\">
\t\t        \t\t<img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/menu_icons/dashboard.png"), "html", null, true);
        echo "\" />
\t\t        \t\t<span>Dashboard</span>
\t\t        \t</a>
\t\t        </li>
\t\t        <li id=\"sidebar_menu_sites\" class=\"accordion-group color_7\">
\t\t\t        <a class=\"accordion-toggle widgets collapsed\" data-toggle=\"collapse\" data-parent=\"#sidebar_menu\" href=\"#collapse1\">
\t\t\t\t        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/menu_icons/forms.png"), "html", null, true);
        echo "\" />
\t\t\t\t        <span>Projets</span>
\t\t\t        </a>
\t\t\t        <ul id=\"collapse1\" class=\"accordion-body collapse\">
                                    <li class=\"projets\"><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_admin_projets"), "html", null, true);
        echo "\">Tous les projets</a></li>
\t\t            \t<li class=\"projetenattente\"><a href=\"\">Projets en attente</a></li>
\t\t\t\t\t\t<li class=\"designencours\"><a href=\"\">Design en cours</a></li>
\t\t            \t<li class=\"designtermine\"><a href=\"\">Design terminé</a></li>
\t\t            \t<li class=\"developpementencours\"><a href=\"\">Developpement en cours</a></li>
\t\t            \t<li class=\"developpementtermine\"><a href=\"\">Developpement terminé</a></li>
\t\t            \t<li class=\"projetentest\"><a href=\"\">Projets en test</a></li>
\t\t            \t<li class=\"projettermine\"><a href=\"\">Projets terminé</a></li>
\t\t          \t</ul>
\t\t        </li>
\t\t        <li id=\"sidebar_menu_clients\" class=\"accordion-group color_12\">
\t\t\t        <a class=\"widgets\" data-parent=\"#sidebar_menu\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_admin_clients"), "html", null, true);
        echo "\">
\t\t\t\t        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/menu_icons/users.png"), "html", null, true);
        echo "\">
\t\t\t\t        <span>Clients</span>
\t\t\t        </a>
\t\t        </li>
\t\t        <li id=\"sidebar_menu_utilisateurs\" class=\"accordion-group color_19\">
\t\t\t        <a class=\"accordion-toggle widgets collapsed\" data-toggle=\"collapse\" data-parent=\"#sidebar_menu\" href=\"#collapse2\">
\t\t\t\t        <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/menu_icons/users.png"), "html", null, true);
        echo "\" />
\t\t\t\t        <span>Utilisateurs</span>
\t\t\t        </a>
\t\t\t        <ul id=\"collapse2\" class=\"accordion-body collapse\">
\t\t\t        \t<li class=\"utilisateurs\"><a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_admin_utilisateurs"), "html", null, true);
        echo "\">Tous les utilisateurs</a></li>
\t\t            \t<li class=\"chefdeprojet\"><a href=\"\">Chefs de projets</a></li>
\t\t\t\t\t\t<li class=\"designeur\"><a href=\"\">Designeurs</a></li>
\t\t            \t<li class=\"developpeur\"><a href=\"\">Développeurs</a></li>
\t\t            \t<li class=\"testeur\"><a href=\"\">Testeurs</a></li>
\t\t          \t</ul>
\t\t        </li>
\t\t        <li id=\"sidebar_menu_langues\" class=\"accordion-group color_18\">
\t\t\t        <a class=\"widgets\" data-parent=\"#sidebar_menu\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_admin_langues"), "html", null, true);
        echo "\">
\t\t\t\t        <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/menu_icons/forms.png"), "html", null, true);
        echo "\" />
\t\t\t\t        <span>Langues</span>
\t\t\t        </a>
\t\t        </li>
\t\t    </ul>
      \t\t<div class=\"menu_states row-fluid container \">
        \t\t<h2 class=\"pull-left\">Affichage</h2>
        \t\t<div class=\"options pull-right\">
          \t\t\t<button id=\"menu_state_1\" class=\"color_4\" rel=\"tooltip\" data-state =\"sidebar_icons\" data-placement=\"top\" data-original-title=\"Icon Menu\">1</button>
          \t\t\t<button id=\"menu_state_2\" class=\"color_4 active\" rel=\"tooltip\" data-state =\"sidebar_default\" data-placement=\"top\" data-original-title=\"Fixed Menu\">2</button>
          \t\t\t<button id=\"menu_state_3\" class=\"color_4\" rel=\"tooltip\" data-placement=\"top\" data-state =\"sidebar_hover\" data-original-title=\"Floating on Hover Menu\">3</button>
        \t\t</div>
     \t\t</div>
      \t\t<!-- End sidebar_box --> 
      
    \t</div>
\t</div>
</div>
<div id=\"main\">
\t<div class=\"container\">
    \t<div class=\"header row-fluid\">
      \t\t<div class=\"logo\">
\t      \t\t<a href=\"\">
\t\t      \t\t<span>Start</span>
\t\t      \t\t<span class=\"icon\"></span>
\t      \t\t</a>
      \t\t</div>
      \t\t<div class=\"top_right\">
        \t\t<ul class=\"nav nav_menu\">
          \t\t\t<li class=\"dropdown\">
          \t\t\t\t<a class=\"dropdown-toggle administrator\" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"/page.html\">
            \t\t\t\t<div class=\"title\">
\t            \t\t\t\t<span class=\"name\">Yosri BAHRI</span>
\t            \t\t\t\t<span class=\"subtitle\">WebDeveloper</span>
            \t\t\t\t</div>
            \t\t\t\t<span class=\"icon\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/img/thumbnail_yosri.jpg"), "html", null, true);
        echo "\" /></span>
            \t\t\t</a>
            \t\t\t<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
\t\t\t\t        \t<li><a href=\"profile.html\"><i class=\" icon-user\"></i> My Profile</a></li>
\t\t\t\t            <li><a href=\"forms_general.html\"><i class=\" icon-cog\"></i>Settings</a></li>
\t\t\t\t            <li><a href=\"index2.html\"><i class=\" icon-unlock\"></i>Log Out</a></li>
            \t\t\t</ul>
          \t\t\t</li>
        \t\t</ul>
      \t\t</div>
      \t\t<!-- End top-right --> 
    \t</div>
    
    \t<div id=\"main_container\">
      \t\t";
        // line 149
        $this->displayBlock('content', $context, $blocks);
        // line 150
        echo "    \t</div>
    \t<!-- End #container --> 
\t</div>
\t<div id=\"footer\">
\t\t<p> &copy; iGreg - 2013 </p>
\t\t<span class=\"company_logo\"><a href=\"http://www.pixelgrade.com\"></a></span>
\t</div>
</div>
\t<div class=\"background_changer dropdown\">
\t  \t<div class=\"dropdown\" id=\"colors_pallete\"> <a data-toggle=\"dropdown\" data-target=\"drop4\" class=\"change_color\"></a>
\t    \t<ul  class=\"dropdown-menu pull-left\" role=\"menu\" aria-labelledby=\"drop4\">
\t      \t\t<li><a data-color=\"color_0\" class=\"color_0\" tabindex=\"-1\">1</a></li>
\t      \t\t<li><a data-color=\"color_1\" class=\"color_1\" tabindex=\"-1\">1</a></li>
\t      \t\t<li><a data-color=\"color_2\" class=\"color_2\" tabindex=\"-1\">2</a></li>
\t      \t\t<li><a data-color=\"color_3\" class=\"color_3\" tabindex=\"-1\">3</a></li>
\t      \t\t<li><a data-color=\"color_4\" class=\"color_4\" tabindex=\"-1\">4</a></li>
\t      \t\t<li><a data-color=\"color_5\" class=\"color_5\" tabindex=\"-1\">5</a></li>
\t      \t\t<li><a data-color=\"color_6\" class=\"color_6\" tabindex=\"-1\">6</a></li>
\t      \t\t<li><a data-color=\"color_7\" class=\"color_7\" tabindex=\"-1\">7</a></li>
\t      \t\t<li><a data-color=\"color_8\" class=\"color_8\" tabindex=\"-1\">8</a></li>
\t      \t\t<li><a data-color=\"color_9\" class=\"color_9\" tabindex=\"-1\">9</a></li>
\t      \t\t<li><a data-color=\"color_10\" class=\"color_10\" tabindex=\"-1\">10</a></li>
\t      \t\t<li><a data-color=\"color_11\" class=\"color_11\" tabindex=\"-1\">10</a></li>
\t      \t\t<li><a data-color=\"color_12\" class=\"color_12\" tabindex=\"-1\">12</a></li>
\t      \t\t<li><a data-color=\"color_13\" class=\"color_13\" tabindex=\"-1\">13</a></li>
\t      \t\t<li><a data-color=\"color_14\" class=\"color_14\" tabindex=\"-1\">14</a></li>
\t      \t\t<li><a data-color=\"color_15\" class=\"color_15\" tabindex=\"-1\">15</a></li>
\t      \t\t<li><a data-color=\"color_16\" class=\"color_16\" tabindex=\"-1\">16</a></li>
\t      \t\t<li><a data-color=\"color_17\" class=\"color_17\" tabindex=\"-1\">17</a></li>
\t      \t\t<li><a data-color=\"color_18\" class=\"color_18\" tabindex=\"-1\">18</a></li>
\t      \t\t<li><a data-color=\"color_19\" class=\"color_19\" tabindex=\"-1\">19</a></li>
\t      \t\t<li><a data-color=\"color_20\" class=\"color_20\" tabindex=\"-1\">20</a></li>
\t      \t\t<li><a data-color=\"color_21\" class=\"color_21\" tabindex=\"-1\">21</a></li>
\t      \t\t<li><a data-color=\"color_22\" class=\"color_22\" tabindex=\"-1\">22</a></li>
\t      \t\t<li><a data-color=\"color_23\" class=\"color_23\" tabindex=\"-1\">23</a></li>
\t      \t\t<li><a data-color=\"color_24\" class=\"color_24\" tabindex=\"-1\">24</a></li>
\t      \t\t<li><a data-color=\"color_25\" class=\"color_25\" tabindex=\"-1\">25</a></li>
\t    \t</ul>
\t  \t</div>
\t</div>
\t<!-- End .background_changer -->
<!-- </div> -->
<!-- /container -->
    
        
    

<!-- Le javascript
 ================================================== --> 
<!-- General scripts --> 
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"> </script> 
<!--[if !IE]> -->
<!--[if !IE]> -->
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/enquire.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<!-- <![endif]-->
<!-- <![endif]-->
<!--[if lt IE 7]>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/plugins/js/ie7.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script> 
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/excanvas.compiled.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-transition.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-alert.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-modal.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-tab.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-popover.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-button.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-collapse.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/bootstrap-affix.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/fileinput.jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery-ui-1.8.23.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery.touchdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/jquery.uniform.min.js"), "html", null, true);
        echo "\"></script> 
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/jquery.tinyscrollbar.min.js"), "html", null, true);
        echo "\"></script> 
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jnavigate.jquery.min.js"), "html", null, true);
        echo "\"></script> 
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/jquery.touchSwipe.min.js"), "html", null, true);
        echo "\"></script> 
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/jquery.peity.min.js"), "html", null, true);
        echo "\"></script> 

<!-- Flot charts --> 
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script> 
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script> 

<!-- Data tables --> 
<script type=\"text/javascript\" language=\"javascript\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/datatables/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script> 

<!-- Task plugin --> 
<script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/plugins/knockout-2.0.0.js"), "html", null, true);
        echo "\"></script> 

<!-- Custom made scripts for this template --> 
<script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admin/js/scripts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 
<script type=\"text/javascript\">
  /**** Specific JS for this page ****/
/* Todo Plugin */
var todo_data = [
{id: 1, title: \"<i class='gicon-gift icon-white'><\\/i>Have tea with the Queen\", isDone: false},
{id: 2, title: \"<i class='gicon-briefcase icon-white'><\\/i>Steal  James Bond car\", isDone: true},
{id: 3, title: \"<i class='gicon-heart icon-white'><\\/i>Confirm that this template is awesome\", isDone: false},
{id: 4, title: \"<i class='gicon-thumbs-up icon-white'><\\/i>Nothing\", isDone: false},  
{id: 5, title: \"<i class='gicon-fire icon-white'><\\/i>Play solitaire\", isDone: false}         
];


function Task(data) {
  this.title = ko.observable(data.title);
  this.isDone = ko.observable(data.isDone);
  this.isEditing = ko.observable(data.isEditing);

  this.startEdit = function (event) {
      console.log(\"editing\");
      this.isEditing(true);
  }

  this.updateTask = function (task) {
      this.isEditing(false);
  }
}

function TaskListViewModel() {
          // Data
          var self = this;
          self.tasks = ko.observableArray([]);
          self.newTaskText = ko.observable();
          self.incompleteTasks = ko.computed(function() {
              return ko.utils.arrayFilter(self.tasks(), 
                function(task) { 
                  return !task.isDone() && !task._destroy;
              });
          });

          self.completeTasks = ko.computed(function(){
              return ko.utils.arrayFilter(self.tasks(), 
                function(task) { 
                  return task.isDone() && !task._destroy;
              });
          });

          // Operations
          self.addTask = function() {
              self.tasks.push(new Task({ title: this.newTaskText(), isEditing: false }));

              self.newTaskText(\"\");

          };
          self.removeTask = function(task) { self.tasks.destroy(task) };

          self.removeCompleted = function(){
              self.tasks.destroyAll(self.completeTasks());
          };

          /* Load the data */
          var mappedTasks = \$.map(todo_data, function(item){
              return new Task(item);
          });

          self.tasks(mappedTasks);      
      }

      ko.applyBindings(new TaskListViewModel());  
      //End Todo Plugin

      </script>
      <script type=\"text/javascript\">

      //Chart - Campaigns
      \$(function () {
        var data_campaigns = [[1,10], [2,9], [3,8], [4,6], [5,5], [6,3], [7,9], [8,10],[9,12],[10,14],[11,15],[12,13],[13,11],[14,10],[15,9],[16,8],[17,12],[18,14],[19,16],[20,19],[21,20],[22,20],[23,19],[24,17],[25,15],[25,14],[26,12],[27,10],[28,8],[29,10],[30,12],[31,10], [32,9], [33,8], [34,6], [35,5], [36,3], [37,9], [38,10],[39,12],[40,14],[41,15],[42,13],[43,11],[44,10],[45,9],[46,8],[47,12],[48,14],[49,16],[50,12],[51,10], [52,9], [53,8], [54,6], [55,5], [56,3], [57,9], [58,10],[59,12],[60,14],[61,15],[62,13],[63,11],[64,10],[65,9],[66,8],[67,12],[68,14],[69,16]];
        var data_campaigns2 = [[1,12], [2,10], [3,9], [4,8], [5,8], [6,8], [7,8], [8,8],[9,9],[10,9],[11,10],[12,11],[13,12],[14,11],[15,10],[16,10],[17,9],[18,10],[19,11],[20,11],[21,12],[22,13],[23,14],[24,13],[25,12],[25,12],[26,11],[27,10],[28,9],[29,8],[30,7],[31,7], [32,8], [33,8], [34,7], [35,6], [36,6], [37,7], [38,8],[39,8],[40,9],[41,10],[42,11],[43,11],[44,12],[45,12],[46,11],[47,10],[48,9],[49,8],[50,8],[51,9], [52,10], [53,11], [54,12], [55,12], [56,12], [57,13], [58,13],[59,12],[60,11],[61,10],[62,9],[63,8],[64,7],[65,7],[66,6],[67,5],[68,4],[69,3]];

        var plot = \$.plot(\$(\"#placeholder\"),
            [ { data: data_campaigns, color:\"rgba(0,0,0,0.2)\", shadowSize:0, 
            bars: {
              show: true,
              lineWidth: 0,
              fill: true,

              fillColor: { colors: [ { opacity: 1 }, { opacity: 1 } ] }
          }
      } , 
      { data: data_campaigns2, 

          color:\"rgba(255,255,255, 0.4)\", 
          shadowSize:0,
          lines: {show:true, fill:false}, points: {show:false},
          bars: {show:false}
      }  
      ],     
      {
        series: {
         bars: {show:true, barWidth: 0.6}
     },
     grid: { show:false, hoverable: true, clickable: false, autoHighlight: true, borderWidth:0   },
     yaxis: { min: 0, max: 20 }

 });
       
        function showTooltip(x, y, contents) {
            \$('<div id=\"tooltip\"><div class=\"date\">12 Nov 2012<\\/div><div class=\"title text_color_3\">'+x/10+'%<\\/div> <div class=\"description text_color_3\">CTR<\\/div><div class=\"title \">'+x*12+'<\\/div><div class=\"description\">Impressions<\\/div><\\/div>').css( {
                position: 'absolute',
                display: 'none',
                top: y - 125,
                left: x - 40,
                border: '0px solid #ccc',
                padding: '2px 6px',
                'background-color': '#fff',
                opacity: 10
            }).appendTo(\"body\").fadeIn(200);
        }

        var previousPoint = null;
        \$(\"#placeholder\").bind(\"plothover\", function (event, pos, item) {
            \$(\"#x\").text(pos.x.toFixed(2));
            \$(\"#y\").text(pos.y.toFixed(2));
            if (item) {
                if (previousPoint != item.dataIndex) {
                  previousPoint = item.dataIndex;
                  \$(\"#tooltip\").remove();
                  var x = item.datapoint[0].toFixed(2),
                  y = item.datapoint[1].toFixed(2);
                  showTooltip(item.pageX, item.pageY,
                    x);
              }
          }
      });

         //Fundraisers chart
         var data_fund = [[1,10], [2,9], [3,8], [4,6], [5,5], [6,3], [7,9], [8,10],[9,12],[10,14],[11,15],[12,13],[13,11],[14,10],[15,9],[16,8],[17,12],[18,14],[19,16],[20,19],[21,20],[22,20],[23,19],[24,17],[25,15],[25,14],[26,12],[27,10],[28,8],[29,10],[30,12],[31,10], [32,9], [33,8], [34,6], [35,5], [36,3], ];
         \$.plot(\$(\"#placeholder2\"),
           [ { data: data_fund, color:\"#fff\", shadowSize:0, 
           bars: {
              show: true,
              lineWidth: 0,
              fill: true,
              highlight: {
                opacity: 0.3
            },
            fillColor: { colors: [ { opacity: 1 }, { opacity: 1 } ] }
        }
    } 
    ],     
    {
       series: {
         bars: {show:true, barWidth: 0.6}
     },
     grid: { show:false, hoverable: true, clickable: false, autoHighlight: true, borderWidth:0   },
     yaxis: { min: 0, max: 23 }

 });

         function showTooltip2(x, y, contents) {
          \$('<div id=\"tooltip\"><div class=\"title \">'+x*2+'</div><div class=\"description\">Impressions</div></div>').css( {
            position: 'absolute',
            display: 'none',
            top: y - 58,
            left: x - 40,
            border: '0px solid #ccc',
            padding: '2px 6px',
            'background-color': '#fff',
            opacity: 10
        }).appendTo(\"body\").fadeIn(200);
      }

      var previousPoint = null;
      \$(\"#placeholder2\").bind(\"plothover\", function (event, pos, item) {
          \$(\"#x\").text(pos.x.toFixed(2));
          \$(\"#y\").text(pos.y.toFixed(2));
          if (item) {
            if (previousPoint != item.dataIndex) {
              previousPoint = item.dataIndex;
              \$(\"#tooltip\").remove();
              var x = item.datapoint[0].toFixed(2),
              y = item.datapoint[1].toFixed(2);
              showTooltip2(item.pageX, item.pageY,
                x);
          }
      }
  });
    //Envato chart
    \$.plot(\$(\"#placeholder3\"),
       [ { data: data_fund, color:\"rgba(0,0,0,0.2)\", shadowSize:0, 
       bars: {
          lineWidth: 0,
          fill: true,
          fillColor: { colors: [ { opacity: 1 }, { opacity: 1 } ] }
      },
      lines: {show:false, fill:true}, points: {show:false} } 
  ],     
  {
   series: {
     bars: {show:true, barWidth: 0.6}
 },
 grid: { show:false, hoverable: true, clickable: false, autoHighlight: true, borderWidth:0   },
 yaxis: { min: 0, max: 23 }

});
    //Facebook chart
    \$.plot(\$(\"#placeholder4\"),
       [ { data: data_fund, color:\"rgba(0,0,0,0.2)\", shadowSize:0, 
       bars: {

          lineWidth: 0,
          fill: true,

          fillColor: { colors: [ { opacity: 1 }, { opacity: 1 } ] }
      },
      lines: {show:false, fill:true}, points: {show:false}
  } 
  ],     
  {
   series: {
     bars: {show:true, barWidth: 0.6}
 },
 grid: { show:false, hoverable: true, clickable: false, autoHighlight: true, borderWidth:0   },
 yaxis: { min: 0, max: 23 }
});
    // End Fundraiser chart
});


</script>
";
        // line 474
        $this->displayBlock('javascripts', $context, $blocks);
        // line 475
        echo "

</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_css($context, array $blocks = array())
    {
    }

    // line 149
    public function block_content($context, array $blocks = array())
    {
    }

    // line 474
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AdminAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 474,  676 => 149,  671 => 20,  666 => 5,  659 => 475,  657 => 474,  424 => 244,  418 => 241,  412 => 238,  406 => 235,  402 => 234,  396 => 231,  392 => 230,  388 => 229,  384 => 228,  380 => 227,  376 => 226,  372 => 225,  368 => 224,  364 => 223,  360 => 222,  356 => 221,  352 => 220,  348 => 219,  344 => 218,  340 => 217,  336 => 216,  332 => 215,  328 => 214,  324 => 213,  320 => 212,  316 => 211,  312 => 210,  308 => 209,  303 => 207,  296 => 203,  290 => 200,  238 => 150,  236 => 149,  219 => 135,  181 => 100,  177 => 99,  166 => 91,  159 => 87,  150 => 81,  146 => 80,  132 => 69,  125 => 65,  116 => 59,  112 => 58,  77 => 26,  70 => 21,  68 => 20,  63 => 18,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  36 => 9,  29 => 5,  23 => 1,);
    }
}
