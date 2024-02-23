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

/* viewtopic_body.html */
class __TwigTemplate_b39d3ad619c3190a1db1254892a3ec2c extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        // line 3
        echo "<h2 class=\"topic-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 6
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 7
        echo "
";
        // line 8
        if (($context["MODERATORS"] ?? null)) {
            // line 9
            echo "<p>
\t<strong>";
            // line 10
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 13
        echo "
";
        // line 14
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 15
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 18
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 19
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 21
                echo "\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 22
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 24
            echo "
\t\t</div>
\t</div>
";
        }
        // line 28
        echo "
<div class=\"action-bar bar-top\">
\t";
        // line 30
        // line 31
        echo "
\t";
        // line 32
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 33
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 34
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 35
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 39
            echo "\t\t</a>
\t";
        }
        // line 41
        echo "
\t";
        // line 42
        // line 43
        echo "\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 44
        echo "\t";
        // line 45
        echo "
\t";
        // line 46
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 47
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 48
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 50
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 52
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
            // line 54
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 55
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 57
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 62
        echo "
\t";
        // line 63
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 63)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 64
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 65
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 66
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 66))) {
                // line 67
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 67)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 68
                echo "\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 71
            echo "\t\t</div>
\t";
        }
        // line 73
        echo "\t";
        // line 74
        echo "</div>
\t";
        // line 75
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 76
            echo "\t<ul class=\"topic-navi-view\">
\t\t";
            // line 77
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 78
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 79
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\">
\t\t\t\t\t<i class=\"icons fa fa-file-text-o\" aria-hidden=\"true\"></i><span>";
                // line 80
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 84
            echo "
\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 86
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\">
\t\t\t\t\t<i class=\"icons fa fa-file-text-o\" aria-hidden=\"true\"></i><span>";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 92
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\">
\t\t\t\t\t<i class=\"icons fa fa-file-text-o\" aria-hidden=\"true\"></i><span>";
            // line 93
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t</ul>
\t";
        }
        // line 98
        echo "
";
        // line 99
        // line 100
        echo "
";
        // line 101
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 102
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" data-refresh=\"true\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 108
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 109
            echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "poll_option", [], "any", false, false, false, 112));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 113
                echo "\t\t\t\t";
                // line 114
                echo "\t\t\t\t<dl class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 114)) {
                    echo "voted";
                }
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_MOST_VOTES", [], "any", false, false, false, 114)) {
                    echo " most-votes";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 114)) {
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 114);
                echo "\">
\t\t\t\t\t<dt>";
                // line 115
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 115);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 115);
                    echo "</label>";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 115);
                }
                echo "</dt>
\t\t\t\t\t";
                // line 116
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 116);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 116);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 116)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 116);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 116);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 116)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 117
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 117) < 20)) {
                    echo "pollbar1";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 117) < 40)) {
                    echo "pollbar2";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 117) < 60)) {
                    echo "pollbar3";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 117) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT_REL", [], "any", false, false, false, 117);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 117);
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 118
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 118) == 0)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_VOTES");
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT", [], "any", false, false, false, 118);
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 120
                // line 121
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 123
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 125
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_VOTES");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 128
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 129
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 131
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 134
            echo "
\t\t\t";
            // line 135
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 136
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 138
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 141
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 142
            echo $this->extensions['phpbb\template\twig\extension']->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 146
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 147
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 153
        echo "
";
        // line 154
        // line 155
        echo "
";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 156));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 157
            echo "\t";
            // line 158
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 158)) {
                // line 159
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 159);
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 161
            echo "\t<div id=\"p";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 161);
            echo "\" class=\"post has-profile ";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ROW_COUNT", [], "any", false, false, false, 161) % 2 != 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 161)) {
                echo " unreadpost";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 161)) {
                echo " reported";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 161)) {
                echo " deleted";
            }
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "S_ONLINE", [], "any", false, false, false, 161) &&  !twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 161))) {
                echo " online";
            }
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 161)) {
                echo " warned";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 164);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 164)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 165
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 165) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 165))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo " ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 165)) {
                echo "has-avatar";
            } else {
                echo "no-avatar";
            }
            echo "\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
            // line 167
            // line 168
            echo "\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 168)) {
                // line 169
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 169)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 169);
                    echo "\" class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 169);
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 169);
                    echo "</span>";
                }
                // line 170
                echo "\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t";
            // line 172
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 173
            // line 174
            echo "\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 174)) {
                echo "<strong>";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 174);
                echo "</strong>";
            } else {
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 174);
            }
            // line 175
            echo "\t\t\t\t";
            // line 176
            echo "\t\t\t</dt>

\t\t\t";
            // line 178
            // line 179
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 179) || twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 179))) {
                echo "<dd class=\"profile-rank\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 179);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_TITLE", [], "any", false, false, false, 179) && twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 179))) {
                    echo "<br />";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RANK_IMG", [], "any", false, false, false, 179);
                echo "</dd>";
            }
            // line 180
            echo "\t\t\t";
            // line 181
            echo "
\t\t";
            // line 182
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 182) != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 182) !== "")) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 182);
                    echo "\">";
                }
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_POSTS", [], "any", false, false, false, 182);
                if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_SEARCH", [], "any", false, false, false, 182) !== "")) {
                    echo "</a>";
                }
                echo "</dd>";
            }
            // line 183
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 183)) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_JOINED", [], "any", false, false, false, 183);
                echo "</dd>";
            }
            // line 184
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 184)) {
                echo "<dd class=\"profile-warnings\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_WARNINGS", [], "any", false, false, false, 184);
                echo "</dd>";
            }
            // line 185
            echo "
\t\t";
            // line 186
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_PROFILE_FIELD1", [], "any", false, false, false, 186)) {
                // line 187
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 188
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_NAME", [], "any", false, false, false, 188);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong> ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PROFILE_FIELD1_VALUE", [], "any", false, false, false, 188);
                echo "</dd>
\t\t";
            }
            // line 190
            echo "
\t\t";
            // line 191
            // line 192
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "custom_fields", [], "any", false, false, false, 192));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 193
                echo "\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 193)) {
                    // line 194
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_IDENT", [], "any", false, false, false, 194);
                    echo "\"><strong>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 194);
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> ";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 194);
                    echo "</dd>
\t\t\t";
                }
                // line 196
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "\t\t";
            // line 198
            echo "
\t\t";
            // line 199
            // line 200
            echo "\t\t";
            if (( !($context["S_IS_BOT"] ?? null) && twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 200)))) {
                // line 201
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 202
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\" title=\"";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "CONTACT_USER", [], "any", false, false, false, 204);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 205
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "CONTACT_USER", [], "any", false, false, false, 205);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 210
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "contact", [], "any", false, false, false, 210));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 211
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = (twig_get_attribute($this->env, $this->source, $context["contact"], "S_ROW_COUNT", [], "any", false, false, false, 211) % 4);
                    // line 212
                    echo "\t\t\t\t\t\t\t\t";
                    $value = ((($context["REMAINDER"] ?? null) == 3) || (twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 212) && (twig_get_attribute($this->env, $this->source, $context["contact"], "S_NUM_ROWS", [], "any", false, false, false, 212) < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 213
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["REMAINDER"] ?? null) == 0)) {
                        // line 214
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 216
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if (twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 216)) {
                        echo twig_get_attribute($this->env, $this->source, $context["contact"], "U_CONTACT", [], "any", false, false, false, 216);
                    } else {
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_POST_AUTHOR", [], "any", false, false, false, 216);
                    }
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 216);
                    echo "\"";
                    if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "S_LAST_CELL", [], "any", false, false, false, 216)) {
                        echo " class=\"last-cell\"";
                    }
                    if ((twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 216) == "jabber")) {
                        echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t";
                    // line 217
                    echo "<span class=\"contact-icon ";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "ID", [], "any", false, false, false, 217);
                    echo "-icon\">";
                    echo twig_get_attribute($this->env, $this->source, $context["contact"], "NAME", [], "any", false, false, false, 217);
                    echo "</span>";
                    // line 218
                    echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 219
                    if (((($context["REMAINDER"] ?? null) == 3) || twig_get_attribute($this->env, $this->source, $context["contact"], "S_LAST_ROW", [], "any", false, false, false, 219))) {
                        // line 220
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 222
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 223
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 228
            echo "\t\t";
            // line 229
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 233
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 233)) {
                // line 234
                echo "\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 234)) {
                    // line 235
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 235);
                    echo "\">
\t\t\t\t\t\t";
                    // line 236
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_POST_DELETED_MESSAGE", [], "any", false, false, false, 236);
                    echo "<br>
\t\t\t\t\t\t<a class=\"display_post\" data-post-id=\"";
                    // line 237
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 237);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST_VIEW", [], "any", false, false, false, 237);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DISPLAY");
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 239
$context["postrow"], "S_IGNORE_POST", [], "any", false, false, false, 239)) {
                    // line 240
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 240);
                    echo "\">
\t\t\t\t\t\t";
                    // line 241
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "L_IGNORE_POST", [], "any", false, false, false, 241);
                    echo "<br>
\t\t\t\t\t\t<a class=\"display_post\" data-post-id=\"";
                    // line 242
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 242);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST_VIEW", [], "any", false, false, false, 242);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DISPLAY");
                    echo "</a>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 245
                echo "\t\t\t";
            }
            // line 246
            echo "\t\t\t<div id=\"post_content";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 246);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_HIDDEN", [], "any", false, false, false, 246)) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t";
            // line 248
            // line 249
            echo "\t\t<h3 ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_ROW", [], "any", false, false, false, 249)) {
                echo "class=\"first\"";
            }
            echo ">
\t\t\t";
            // line 250
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 250)) {
                // line 251
                echo "\t\t\t\t<img src=\"";
                echo ($context["T_ICONS_PATH"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG", [], "any", false, false, false, 251);
                echo "\" width=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_WIDTH", [], "any", false, false, false, 251);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_HEIGHT", [], "any", false, false, false, 251);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 251);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ICON_IMG_ALT", [], "any", false, false, false, 251);
                echo "\">
\t\t\t";
            }
            // line 253
            echo "\t\t\t<a ";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 253)) {
                echo "class=\"first-unread\" ";
            }
            echo "href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 253);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_SUBJECT", [], "any", false, false, false, 253);
            echo "</a>
\t\t</h3>
\t\t";
            // line 255
            $value = (((((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 255) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 255)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 255)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 255)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 255)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 255));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 256
            echo "\t\t";
            // line 257
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 258
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_POST_BUTTONS", [], "any", false, false, false, 258)) {
                    // line 259
                    echo "\t\t\t\t<ul class=\"post-buttons\">
\t\t\t\t\t";
                    // line 260
                    // line 261
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 261)) {
                        // line 262
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 263
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 263);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 264
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 268
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 268)) {
                        // line 269
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 270
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 270);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 271
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 275
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 275)) {
                        // line 276
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 277
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 277);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 278
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 282
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 282)) {
                        // line 283
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 284
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 284);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 285
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_WARN");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 289
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 289)) {
                        // line 290
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 291
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 291);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 292
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_INFORMATION");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 296
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 296)) {
                        // line 297
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 298
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 298);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 299
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_QUOTE");
                        echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 303
                    echo "\t\t\t\t\t";
                    // line 304
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 306
                echo "\t\t";
            }
            // line 307
            echo "\t\t";
            // line 308
            echo "
\t\t\t";
            // line 309
            // line 310
            echo "\t\t\t<p class=\"author\">
\t\t\t\t";
            // line 311
            if (($context["S_IS_BOT"] ?? null)) {
                // line 312
                echo "\t\t\t\t\t<span><i class=\"icon fa-file fa-fw ";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 312)) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 312);
                echo "</span></span>
\t\t\t\t";
            } else {
                // line 314
                echo "\t\t\t\t\t<a class=\"unread\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 314);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 314);
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-file fa-fw ";
                // line 315
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_UNREAD_POST", [], "any", false, false, false, 315)) {
                    echo "icon-red";
                } else {
                    echo "icon-lightgray";
                }
                echo " icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MINI_POST", [], "any", false, false, false, 315);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t";
            }
            // line 318
            echo "\t\t\t\t<span class=\"responsive-hide\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_AUTHOR_FULL", [], "any", false, false, false, 318);
            echo "</strong> &raquo; </span><time datetime=\"";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE_RFC3339", [], "any", false, false, false, 318);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 318);
            echo "</time>
\t\t\t</p>
\t\t\t";
            // line 320
            // line 321
            echo "
\t\t\t";
            // line 322
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_UNAPPROVED", [], "any", false, false, false, 322)) {
                // line 323
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_CAN_APPROVE", [], "any", false, false, false, 323)) {
                    // line 324
                    echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 324);
                    echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-question icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                    // line 327
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_ACTION");
                    echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    // line 328
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DISAPPROVE");
                    echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                    // line 329
                    echo $this->extensions['phpbb\template\twig\extension']->lang("APPROVE");
                    echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                    // line 330
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 330);
                    echo "\" />
\t\t\t\t\t";
                    // line 331
                    echo ($context["S_FORM_TOKEN"] ?? null);
                    echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
                } else {
                    // line 335
                    echo "\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<span><i class=\"icon fa-exclamation icon-red fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t<strong>";
                    // line 337
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POST_UNAPPROVED_EXPLAIN");
                    echo "</strong>
\t\t\t\t</p>
\t\t\t";
                }
                // line 340
                echo "\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_DELETED", [], "any", false, false, false, 340)) {
                // line 341
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_APPROVE_ACTION", [], "any", false, false, false, 341);
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 343
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t";
                // line 344
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DELETE_PERMANENT", [], "any", false, false, false, 344)) {
                    // line 345
                    echo "\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                    echo "\" name=\"action[delete]\" />
\t\t\t\t\t";
                }
                // line 347
                echo "\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 348
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 348);
                echo "\" />
\t\t\t\t\t";
                // line 349
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 353
            echo "
\t\t\t";
            // line 354
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_POST_REPORTED", [], "any", false, false, false, 354)) {
                // line 355
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 356
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MCP_REPORT", [], "any", false, false, false, 356);
                echo "\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 359
            echo "
\t\t\t";
            // line 360
            // line 361
            echo "
\t\t\t<div class=\"content\">";
            // line 362
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MESSAGE", [], "any", false, false, false, 362);
            echo "</div>

\t\t\t";
            // line 364
            // line 365
            echo "
\t\t\t";
            // line 366
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 366)) {
                // line 367
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 369
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["postrow"], "attachment", [], "any", false, false, false, 371));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 372
                    echo "\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 372);
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 376
            echo "
\t\t\t";
            // line 377
            // line 378
            echo "\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_DISPLAY_NOTICE", [], "any", false, false, false, 378)) {
                echo "<div class=\"rules\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 379
            echo "\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 379) || twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 379))) {
                // line 380
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 381
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETED_MESSAGE", [], "any", false, false, false, 381);
                echo "
\t\t\t\t\t";
                // line 382
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 382)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "DELETE_REASON", [], "any", false, false, false, 382);
                    echo "</em>";
                }
                // line 383
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 384
$context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 384) || twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 384))) {
                // line 385
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 386
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDITED_MESSAGE", [], "any", false, false, false, 386);
                echo "
\t\t\t\t\t";
                // line 387
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 387)) {
                    echo "<br /><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("REASON");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo "</strong> <em>";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EDIT_REASON", [], "any", false, false, false, 387);
                    echo "</em>";
                }
                // line 388
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 390
            echo "
\t\t\t";
            // line 391
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 391)) {
                echo "<div class=\"notice\"><br /><br />";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "BUMPED_MESSAGE", [], "any", false, false, false, 391);
                echo "</div>";
            }
            // line 392
            echo "\t\t\t";
            // line 393
            echo "
\t\t\t";
            // line 394
            // line 395
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 395)) {
                echo "<div id=\"sig";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_ID", [], "any", false, false, false, 395);
                echo "\" class=\"signature\">";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "SIGNATURE", [], "any", false, false, false, 395);
                echo "</div>";
            }
            // line 396
            echo "\t\t\t";
            // line 397
            echo "
\t\t\t";
            // line 398
            // line 399
            echo "\t\t\t</div>

\t\t</div>

\t\t";
            // line 403
            // line 404
            echo "\t\t<div class=\"back2top\">
\t\t\t";
            // line 405
            // line 406
            echo "\t\t\t<a href=\"#top\" class=\"top\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
            echo "\">
\t\t\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i>
\t\t\t\t<span class=\"sr-only\">";
            // line 408
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
            echo "</span>
\t\t\t</a>
\t\t\t";
            // line 410
            // line 411
            echo "\t\t</div>
\t\t";
            // line 412
            // line 413
            echo "
\t\t</div>
\t</div>

\t";
            // line 417
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo "
";
        // line 420
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 421
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 421)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 423
        echo "
";
        // line 424
        // line 425
        echo "\t<div class=\"action-bar bar-bottom\">
\t";
        // line 426
        // line 427
        echo "
\t";
        // line 428
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 429
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 430
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 431
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 433
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 435
            echo "\t\t</a>
\t";
        }
        // line 437
        echo "\t";
        // line 438
        echo "
\t";
        // line 439
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 439)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 440
        echo "
\t";
        // line 441
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 441))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 442
            echo "\t\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 443
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 443)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 444
            echo "\t\t</form>
\t";
        }
        // line 446
        echo "
\t";
        // line 447
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 447))) {
            // line 448
            echo "\t<div class=\"quickmod dropdown-container dropdown-container-left dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t<span title=\"";
            // line 449
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 450
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "</span>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 456
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 456));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 457
                echo "\t\t\t\t\t";
                $value = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["quickmod"], "VALUE", [], "any", false, false, false, 457), [0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"]);
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 458
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "LINK", [], "any", false, false, false, 458);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "QUICKMOD_AJAX", [], "any", false, false, false, 458)) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "TITLE", [], "any", false, false, false, 458);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 460
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 464
        echo "
\t";
        // line 465
        // line 466
        echo "
\t";
        // line 467
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 467)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 468
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 469
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 470
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 470))) {
                // line 471
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 471)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 472
                echo "\t\t\t";
            } else {
                // line 473
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 475
            echo "\t\t</div>
\t";
        }
        // line 477
        echo "</div>

";
        // line 479
        // line 480
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 480)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 481
        echo "
";
        // line 482
        // line 483
        echo "
";
        // line 484
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 485
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 486
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 487
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 490
        echo "
";
        // line 491
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 491)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1667 => 491,  1664 => 490,  1658 => 487,  1652 => 486,  1649 => 485,  1647 => 484,  1644 => 483,  1643 => 482,  1640 => 481,  1628 => 480,  1627 => 479,  1623 => 477,  1619 => 475,  1613 => 473,  1610 => 472,  1597 => 471,  1595 => 470,  1591 => 469,  1588 => 468,  1586 => 467,  1583 => 466,  1582 => 465,  1579 => 464,  1573 => 460,  1558 => 458,  1554 => 457,  1550 => 456,  1541 => 450,  1537 => 449,  1532 => 448,  1530 => 447,  1527 => 446,  1523 => 444,  1511 => 443,  1506 => 442,  1504 => 441,  1501 => 440,  1489 => 439,  1486 => 438,  1484 => 437,  1480 => 435,  1474 => 433,  1468 => 431,  1466 => 430,  1455 => 429,  1453 => 428,  1450 => 427,  1449 => 426,  1446 => 425,  1445 => 424,  1442 => 423,  1428 => 421,  1426 => 420,  1423 => 419,  1418 => 417,  1412 => 413,  1411 => 412,  1408 => 411,  1407 => 410,  1402 => 408,  1396 => 406,  1395 => 405,  1392 => 404,  1391 => 403,  1385 => 399,  1384 => 398,  1381 => 397,  1379 => 396,  1370 => 395,  1369 => 394,  1366 => 393,  1364 => 392,  1358 => 391,  1355 => 390,  1351 => 388,  1342 => 387,  1338 => 386,  1335 => 385,  1333 => 384,  1330 => 383,  1321 => 382,  1317 => 381,  1314 => 380,  1311 => 379,  1304 => 378,  1303 => 377,  1300 => 376,  1296 => 374,  1287 => 372,  1283 => 371,  1278 => 369,  1274 => 367,  1272 => 366,  1269 => 365,  1268 => 364,  1263 => 362,  1260 => 361,  1259 => 360,  1256 => 359,  1248 => 356,  1245 => 355,  1243 => 354,  1240 => 353,  1233 => 349,  1229 => 348,  1224 => 347,  1218 => 345,  1216 => 344,  1212 => 343,  1206 => 341,  1203 => 340,  1197 => 337,  1193 => 335,  1186 => 331,  1182 => 330,  1178 => 329,  1174 => 328,  1170 => 327,  1163 => 324,  1160 => 323,  1158 => 322,  1155 => 321,  1154 => 320,  1142 => 318,  1130 => 315,  1123 => 314,  1111 => 312,  1109 => 311,  1106 => 310,  1105 => 309,  1102 => 308,  1100 => 307,  1097 => 306,  1093 => 304,  1091 => 303,  1084 => 299,  1078 => 298,  1075 => 297,  1072 => 296,  1065 => 292,  1059 => 291,  1056 => 290,  1053 => 289,  1046 => 285,  1040 => 284,  1037 => 283,  1034 => 282,  1027 => 278,  1021 => 277,  1018 => 276,  1015 => 275,  1008 => 271,  1002 => 270,  999 => 269,  996 => 268,  989 => 264,  983 => 263,  980 => 262,  977 => 261,  976 => 260,  973 => 259,  970 => 258,  967 => 257,  965 => 256,  962 => 255,  950 => 253,  935 => 251,  933 => 250,  926 => 249,  925 => 248,  915 => 246,  912 => 245,  902 => 242,  898 => 241,  893 => 240,  891 => 239,  882 => 237,  878 => 236,  873 => 235,  870 => 234,  868 => 233,  862 => 229,  860 => 228,  853 => 223,  847 => 222,  843 => 220,  841 => 219,  838 => 218,  832 => 217,  814 => 216,  810 => 214,  807 => 213,  803 => 212,  800 => 211,  796 => 210,  788 => 205,  784 => 204,  778 => 202,  775 => 201,  772 => 200,  771 => 199,  768 => 198,  766 => 197,  760 => 196,  749 => 194,  746 => 193,  741 => 192,  740 => 191,  737 => 190,  729 => 188,  726 => 187,  724 => 186,  721 => 185,  711 => 184,  701 => 183,  684 => 182,  681 => 181,  679 => 180,  668 => 179,  667 => 178,  663 => 176,  661 => 175,  652 => 174,  651 => 173,  648 => 172,  646 => 171,  643 => 170,  630 => 169,  627 => 168,  626 => 167,  611 => 165,  603 => 164,  575 => 161,  565 => 159,  562 => 158,  560 => 157,  556 => 156,  553 => 155,  552 => 154,  549 => 153,  540 => 147,  536 => 146,  529 => 142,  526 => 141,  518 => 138,  514 => 136,  512 => 135,  509 => 134,  503 => 131,  499 => 129,  497 => 128,  488 => 125,  481 => 123,  478 => 122,  472 => 121,  471 => 120,  458 => 118,  435 => 117,  409 => 116,  397 => 115,  377 => 114,  375 => 113,  371 => 112,  357 => 109,  353 => 108,  343 => 102,  341 => 101,  338 => 100,  337 => 99,  334 => 98,  326 => 93,  322 => 92,  314 => 87,  310 => 86,  306 => 84,  299 => 80,  295 => 79,  292 => 78,  290 => 77,  287 => 76,  285 => 75,  282 => 74,  280 => 73,  276 => 71,  270 => 69,  267 => 68,  254 => 67,  252 => 66,  241 => 65,  238 => 64,  236 => 63,  233 => 62,  225 => 57,  220 => 55,  214 => 54,  209 => 52,  205 => 51,  201 => 50,  196 => 48,  193 => 47,  191 => 46,  188 => 45,  186 => 44,  173 => 43,  172 => 42,  169 => 41,  165 => 39,  159 => 37,  153 => 35,  151 => 34,  140 => 33,  138 => 32,  135 => 31,  134 => 30,  130 => 28,  124 => 24,  119 => 22,  114 => 21,  106 => 19,  104 => 18,  95 => 15,  93 => 14,  90 => 13,  77 => 10,  74 => 9,  72 => 8,  69 => 7,  63 => 6,  60 => 5,  59 => 4,  50 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
