<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index_body.html */
class __TwigTemplate_1dc2650b7143c2f7c86151c4682dcdf3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<p class=\"";
        // line 3
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo " responsive-center time";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " rightside";
        }
        echo "\">";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo ($context["LAST_VISIT_DATE"] ?? null);
        } else {
            echo ($context["CURRENT_TIME"] ?? null);
        }
        echo "</p>
";
        // line 4
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "<p class=\"responsive-center time\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        // line 7
        echo "
";
        // line 8
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 9
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 10
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>

";
        }
        // line 14
        echo "
";
        // line 15
        // line 16
        echo "<!-- topic-navi for phpBB 3.2 by Joyce&Luna http://phpBB-Style-Design.de -->
";
        // line 17
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 18
            echo "<ul class=\"topic-navi\">
\t";
            // line 19
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 20
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 21
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icons fa fa-file-text-o\" aria-hidden=\"true\"></i><span>";
                // line 22
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t";
            }
            // line 26
            echo "
\t";
            // line 27
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 28
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 29
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icons fa fa-file-text-o\" aria-hidden=\"true\"></i><span>";
                // line 30
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t";
            }
            // line 34
            echo "
\t";
            // line 35
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 36
                echo "\t\t<li>
\t\t\t<a href=\"";
                // line 37
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\">
\t\t\t\t<i class=\"icons fa fa-file-text-o\" aria-hidden=\"true\"></i><span>";
                // line 38
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t</a>
\t\t</li>
\t";
            }
            // line 42
            echo "
\t\t<li>
\t\t\t<a href=\"";
            // line 44
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\">
\t\t\t\t<i class=\"icons fa fa-file-text-o\" aria-hidden=\"true\"></i><span>";
            // line 45
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t</a>
\t\t</li>

\t\t<li>
\t\t\t<a href=\"";
            // line 50
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\">
\t\t\t\t<i class=\"icons fa fa-file-text-o\" aria-hidden=\"true\"></i><span>";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t</a>
\t\t</li>
</ul>
";
        }
        // line 56
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 56)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 57
        echo "
";
        // line 58
        // line 59
        echo "
";
        // line 60
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 61
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 62
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a>";
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 65
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 66
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 67
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 69
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 70
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 72
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 73
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "

\t\t\t";
            // line 75
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t\t</fieldset>
\t</form>
";
        }
        // line 79
        echo "
";
        // line 80
        // line 81
        echo "
";
        // line 82
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 83
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 84
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 85
            echo "\t\t<p>
\t\t\t";
            // line 86
            // line 87
            echo "\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
\t\t\t";
            // line 88
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 89
                echo "\t\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t";
                // line 90
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 91
                echo "\t\t\t";
            }
            // line 92
            echo "\t\t\t";
            // line 93
            echo "\t\t</p>
\t</div>
";
        }
        // line 96
        echo "
";
        // line 97
        // line 98
        echo "
";
        // line 99
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 100
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 101
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 103
            // line 104
            echo "\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 104))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 104));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 104);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 104) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 104);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 104)) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BIRTHDAYS");
            }
            // line 105
            echo "\t\t\t";
            // line 106
            echo "\t\t</p>
\t</div>
";
        }
        // line 109
        echo "
";
        // line 110
        if (($context["NEWEST_USER"] ?? null)) {
            // line 111
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 112
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 114
            // line 115
            echo "\t\t\t";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
\t\t\t";
            // line 116
            // line 117
            echo "\t\t</p>
\t</div>
";
        }
        // line 120
        echo "
";
        // line 121
        // line 122
        echo "
";
        // line 123
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 123)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 123,  427 => 122,  426 => 121,  423 => 120,  418 => 117,  417 => 116,  406 => 115,  405 => 114,  400 => 112,  397 => 111,  395 => 110,  392 => 109,  387 => 106,  385 => 105,  359 => 104,  358 => 103,  353 => 101,  350 => 100,  348 => 99,  345 => 98,  344 => 97,  341 => 96,  336 => 93,  334 => 92,  331 => 91,  322 => 90,  317 => 89,  315 => 88,  306 => 87,  305 => 86,  302 => 85,  290 => 84,  287 => 83,  285 => 82,  282 => 81,  281 => 80,  278 => 79,  271 => 75,  266 => 73,  261 => 72,  255 => 70,  252 => 69,  244 => 67,  242 => 66,  235 => 65,  228 => 64,  213 => 62,  208 => 61,  206 => 60,  203 => 59,  202 => 58,  199 => 57,  187 => 56,  179 => 51,  175 => 50,  167 => 45,  163 => 44,  159 => 42,  152 => 38,  148 => 37,  145 => 36,  143 => 35,  140 => 34,  133 => 30,  129 => 29,  126 => 28,  124 => 27,  121 => 26,  114 => 22,  110 => 21,  107 => 20,  105 => 19,  102 => 18,  100 => 17,  97 => 16,  96 => 15,  93 => 14,  84 => 10,  81 => 9,  79 => 8,  76 => 7,  75 => 6,  72 => 5,  66 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
