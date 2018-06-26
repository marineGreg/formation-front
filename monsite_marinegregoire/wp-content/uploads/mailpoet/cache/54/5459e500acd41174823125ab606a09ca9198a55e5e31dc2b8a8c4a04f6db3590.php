<?php

/* settings/mta.html */
class __TwigTemplate_57da0fa5b4cfdd242f70481658b7ad7540db14e7dfddf98cbc186d99f18e031c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["intervals"] = array(0 => 1, 1 => 2, 2 => 5, 3 => 10, 4 => 15, 5 => 30);
        // line 2
        $context["default_frequency"] = array("website" => array("emails" => 25, "interval" => 5), "smtp" => array("emails" => 100, "interval" => 5));
        // line 12
        echo "
<!-- mta: group -->
<input
  type=\"hidden\"
  id=\"mta_group\"
  name=\"mta_group\"
  value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "mta_group", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mailpoet_smtp_provider\"
  name=\"mailpoet_smtp_provider\"
  value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()), "html", null, true);
        echo "\"
/>
<!-- mta: method -->
<input
  type=\"hidden\"
  id=\"mta_method\"
  name=\"mta[method]\"
  value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "method", array()), "html", null, true);
        echo "\"
/>

<!-- mta: sending frequency -->
<input
  type=\"hidden\"
  id=\"mta_frequency_emails\"
  name=\"mta[frequency][emails]\"
  value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mta_frequency_interval\"
  name=\"mta[frequency][interval]\"
  value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "interval", array()), "html", null, true);
        echo "\"
/>

<!-- mta: mailpoet sending service key -->
<input
  type=\"hidden\"
  id=\"mailpoet_api_key\"
  name=\"mta[mailpoet_api_key]\"
  value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "mailpoet_api_key", array()), "html", null, true);
        echo "\"
/>

<!-- smtp: available sending methods -->
<ul class=\"mailpoet_sending_methods\">
  <li
    data-group=\"mailpoet\"
    ";
        // line 60
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "mailpoet")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 61
        echo "  >
    <div class=\"mailpoet_sending_method_description\">
      <h3>
        ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet Sending Service");
        echo "
      </h3>

      <p
        class=\"mailpoet_description";
        // line 68
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
        id=\"mailpoet_sending_method_active_text\"
      >
        <strong>";
        // line 71
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You're now sending with MailPoet!");
        echo "</strong>
        <br />
        ";
        // line 73
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Great, you're all set up. Your emails will now be sent quickly and reliably!");
        echo "
      </p>

      <div
        class=\"mailpoet_description";
        // line 77
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
        id=\"mailpoet_sending_method_inactive_text\"
      >
        <strong>";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Solve all of your sending problems!");
        echo "</strong>

        <ul class=\"sending-method-benefits mailpoet_success\">
          <li class=\"mailpoet_success_item\">";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reach the inbox, not the spam box.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Super fast: send up to 50,000 emails per hour.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 85
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails are signed with SPF & DKIM.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 86
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Automatically remove invalid and bounced addresses (bounce handling) to keep your lists clean.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configuration is dead-simple: simply enter a key to activate the sending service.");
        echo "
          <li class=\"mailpoet_success_item\"><strong>";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Plus:");
        echo "</strong> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("get the Premium features for free.");
        echo "
        </li>
        </ul>
        <a
          href=\"";
        // line 92
        echo admin_url("admin.php?page=mailpoet-premium");
        echo "\"
          class=\"button button-primary\"
          target=\"_blank\"
        >";
        // line 95
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Find out more about our monthly plans");
        echo "</a>

        <a href=\"https://www.mailpoet.com/free-plan/\" class=\"button button-primary sending-free-plan-button\" target=\"_blank\">
          <strong>";
        // line 98
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("new!");
        echo "</strong> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Try it for free (for up to 2,000 subscribers)");
        echo "
        </a>
      </div>
    </div>
    <div class=\"mailpoet_status\">
      <span>";
        // line 103
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>

      <div class=\"mailpoet_actions\">
        <button
          type=\"button\"
          class=\"mailpoet_sending_service_activate button-secondary\"
        ";
        // line 109
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "mailpoet") ||  !($context["mss_key_valid"] ?? null))) {
            echo " disabled=\"disabled\"";
        }
        // line 110
        echo "        >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</button>
      </div>
    </div>

  </li>
  <li
    data-group=\"other\"
    ";
        // line 117
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp") || ($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "website"))) {
            echo "class=\"mailpoet_active\"";
        }
        // line 118
        echo "  >
    <div class=\"mailpoet_sending_method_description\">
      <h3>";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Other");
        echo "</h3>
      <div class=\"mailpoet_description\">
        <strong>";
        // line 122
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send emails via your host (not recommended!) or via a third-party sender.");
        echo "</strong>
        <ul class=\"sending-method-benefits mailpoet_error\">
          <li class=\"mailpoet_error_item\">";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unless you're a pro, you’ll probably end up in spam.");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 125
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending speed is limited by your host and/or your third-party (with a 2,000 per hour maximum).");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 126
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manual configuration of SPF and DKIM required.");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 127
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce handling is available, but only with an extra [link]add-on[/link]."), "https://wordpress.org/plugins/bounce-handler-mailpoet/", array("target" => "_blank"));
        // line 131
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 132
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You’ll need a separate plugin to send your WordPress site emails (optional).");
        echo "
        </ul>
      </div>
    </div>
    <div class=\"mailpoet_status\">
      <span>";
        // line 137
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
      <div class=\"mailpoet_actions\">
        <a
          class=\"button-secondary\"
          href=\"#mta/other\">";
        // line 141
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
      </div>
    </div>
  </li>
</ul>

<p class=\"mailpoet_sending_methods_help help\">
  ";
        // line 148
        $context["badgeClassName"] = (((($context["is_new_user"] ?? null) == true)) ? ("mailpoet_badge mailpoet_badge_video") : ("mailpoet_badge mailpoet_badge_video mailpoet_badge_video_grey"));
        // line 149
        echo "  ";
        echo MailPoet\Util\Helpers::replaceLinkTags(MailPoet\Util\Helpers::replaceLinkTags(sprintf($this->env->getExtension('MailPoet\Twig\I18n')->translate("Need help to pick? [link1]%s See video guide[/link1] [link2]or check out the comparison table of sending methods[/link2]."), "<span class=\"dashicons dashicons-format-video\"></span>"), "https://beta.docs.mailpoet.com/article/235-video-guide-sending-options", array("class" =>         // line 151
($context["badgeClassName"] ?? null), "target" => "_blank"), "link1"), "http://beta.docs.mailpoet.com/article/181-comparison-table-of-sending-methods", array("target" => "_blank"), "link2");
        // line 154
        echo "
</p>

<div id=\"mailpoet_sending_method_setup\">

  <!-- Sending Method: Other -->
  <div class=\"mailpoet_sending_method\" data-group=\"other\" style=\"display:none;\">
    <table class=\"form-table\">
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_smtp_method\">
            ";
        // line 165
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Method");
        echo "
          </label>
        </th>
        <td>
          <!-- smtp provider -->
          <select
            id=\"mailpoet_smtp_method\"
            name=\"smtp_provider\"
          >
            <option data-interval=\"5\" data-emails=\"25\" value=\"server\">
              ";
        // line 175
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host / web server");
        echo "
            </option>
            <option data-interval=\"5\" data-emails=\"100\" value=\"manual\"
              ";
        // line 179
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 181
            echo "              selected=\"selected\"
              ";
        }
        // line 183
        echo "            >
              ";
        // line 184
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP");
        echo "
            </option>
            <!-- providers -->
            <optgroup label=\"";
        // line 187
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select your provider");
        echo "\">
              ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hosts"] ?? null), "smtp", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 189
            echo "              <option
                value=\"";
            // line 190
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                data-emails=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                data-interval=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                data-fields=\"";
            // line 193
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["host"], "fields", array()), ","), "html", null, true);
            echo "\"
              ";
            // line 194
            if (($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) == $context["host_key"])) {
                // line 195
                echo "              selected=\"selected\"
              ";
            }
            // line 197
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "            </optgroup>
          </select>
        </td>
      </tr>
      <tr id=\"mailpoet_sending_method_host\"
        ";
        // line 205
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 207
            echo "        style=\"display:none;\"
        ";
        }
        // line 209
        echo "      >
        <th scope=\"row\">
          <label for=\"mailpoet_web_host\">
            ";
        // line 212
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host");
        echo "
          </label>
        </th>
        <td>
          <p>
            <!-- sending frequency -->
            <select
              id=\"mailpoet_web_host\"
              name=\"web_host\"
            >

              <!-- web hosts -->
              <option
                value=\"manual\"
                data-emails=\"25\"
                data-interval=\"5\"
                label=\"";
        // line 228
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Not listed (default)");
        echo "\"
              >
              ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["hosts"] ?? null), "web", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 231
            echo "              <option
                value=\"";
            // line 232
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                data-emails=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                data-interval=\"";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
              ";
            // line 235
            if (($this->getAttribute(($context["settings"] ?? null), "web_host", array()) == $context["host_key"])) {
                // line 236
                echo "              selected=\"selected\"
              ";
            }
            // line 238
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "            </select>
          </p>

        </td>
      </tr>
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_web_host\">
            ";
        // line 248
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
          </label>
        </th>
        <td>
          <p>
            <!-- sending frequency -->
            <select
              id=\"mailpoet_sending_frequency\"
              name=\"mailpoet_sending_frequency\"
            >
              <option value=\"auto\">
                ";
        // line 259
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Recommended");
        echo "
              </option>
              <option value=\"manual\"
                ";
        // line 263
        if ( !($this->getAttribute(($context["settings"] ?? null), "mailpoet_sending_frequency", array()) == "auto")) {
            // line 265
            echo "                selected=\"selected\"
                ";
        }
        // line 267
        echo "              >
                ";
        // line 268
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("I'll set my own frequency");
        echo "
              </option>
            </select>
            <span id=\"mailpoet_recommended_daily_emails\"></span>
          </p>
          <div id=\"mailpoet_sending_frequency_manual\"
            ";
        // line 275
        if (($this->getAttribute(($context["settings"] ?? null), "mailpoet_sending_frequency", array()) == "auto")) {
            // line 277
            echo "              style=\"display: none\"
            ";
        }
        // line 279
        echo "          >
            <p>
              <input
                id=\"other_frequency_emails\"
                type=\"number\"
                min=\"1\"
                max=\"1000\"
              ";
        // line 286
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "emails", array())) {
            // line 287
            echo "                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
              ";
        } else {
            // line 289
            echo "                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "emails", array()), "html", null, true);
            echo "\"
              ";
        }
        // line 291
        echo "              />
              ";
        // line 292
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
              <select id=\"other_frequency_interval\">
                ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["intervals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 295
            echo "                <option
                  value=\"";
            // line 296
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                ";
            // line 298
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 299
$context["interval"] == $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "interval", array())))) {
                // line 301
                echo "                selected=\"selected\"
                ";
            }
            // line 303
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 304
                echo "                selected=\"selected\"
                ";
            }
            // line 306
            echo "                >
                ";
            // line 307
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                ";
            // line 308
            if (($context["interval"] == $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "interval", array()))) {
                // line 309
                echo "                (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                ";
            }
            // line 311
            echo "                </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "              </select>
              <span id=\"mailpoet_other_daily_emails\"></span>
            </p>
            <br />
            <p>
              ";
        // line 318
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Warning!</strong> You may break the terms of your web host or provider by sending more than the recommended emails per day. Contact your host if you want to send more.");
        echo "
            </p>
          </div>
        </td>
      </tr>
      <tr class=\"mailpoet_smtp_field\" data-field=\"host\"
        ";
        // line 325
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 327
            echo "        style=\"display:none;\"
        ";
        }
        // line 329
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_host]\">
            ";
        // line 332
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Hostname");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 335
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.: smtp.mydomain.com");
        echo "
          </p>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_host]\"
            name=\"mta[host]\"
            value=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "host", array()), "html", null, true);
        echo "\" />
        </td>
      </tr>
      <!-- smtp: port -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"port\"
        ";
        // line 350
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 352
            echo "        style=\"display:none;\"
        ";
        }
        // line 354
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_port]\">
            ";
        // line 357
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Port");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"number\"
            max=\"65535\"
            min=\"1\"
            maxlength=\"5\"
            style=\"width:5em;\"
            id=\"settings[mta_port]\"
            name=\"mta[port]\"
            value=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "port", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: amazon region -->
      <tr class=\"mailpoet_aws_field\" data-field=\"region\"
        ";
        // line 377
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 379
            echo "        style=\"display:none;\"
        ";
        }
        // line 381
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_region]\">
            ";
        // line 384
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Region");
        echo "
          </label>
        </th>
        <td>
          <select
            id=\"settings[mta_region]\"
            name=\"mta[region]\"
            value=\"";
        // line 391
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 392
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "region", array()), "html", null, true);
        }
        // line 393
        echo "\"
          >
            ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["hosts"] ?? null), "smtp", array()), "AmazonSES", array()), "regions", array()));
        foreach ($context['_seq'] as $context["region"] => $context["server"]) {
            // line 396
            echo "            <option
              value=\"";
            // line 397
            echo twig_escape_filter($this->env, $context["server"], "html", null, true);
            echo "\"
            ";
            // line 398
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "region", array()) == $context["server"])) {
                // line 399
                echo "            selected=\"selected\"
            ";
            }
            // line 401
            echo "            >
            ";
            // line 402
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['region'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 405
        echo "          </select>
        </td>
      </tr>

      <!-- smtp: amazon access_key -->
      <tr class=\"mailpoet_aws_field\" data-field=\"access_key\"
        ";
        // line 412
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 414
            echo "        style=\"display:none;\"
        ";
        }
        // line 416
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_access_key]\">
            ";
        // line 419
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Access Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_access_key]\"

            name=\"mta[access_key]\"
            value=\"";
        // line 429
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "access_key", array()), "html", null, true);
        }
        // line 431
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: amazon secret_key -->
      <tr class=\"mailpoet_aws_field\" data-field=\"secret_key\"
        ";
        // line 439
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 441
            echo "        style=\"display:none;\"
        ";
        }
        // line 443
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_secret_key]\">
            ";
        // line 446
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secret Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_secret_key]\"

            name=\"mta[secret_key]\"
            value=\"";
        // line 456
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) == "smtp")) {
            // line 457
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "secret_key", array()), "html", null, true);
        }
        // line 458
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: api key -->
      <tr class=\"mailpoet_sendgrid_field\" data-field=\"api_key\"
        ";
        // line 466
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "SendGrid"))) {
            // line 468
            echo "        style=\"display:none;\"
        ";
        }
        // line 470
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_api_key]\">
            ";
        // line 473
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("API Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_api_key]\"
            name=\"mta[api_key]\"
            value=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "api_key", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: login -->
      <tr id=\"mta_login\" class=\"mailpoet_smtp_field\" data-field=\"login\"
        ";
        // line 490
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 492
            echo "        style=\"display:none;\"
        ";
        }
        // line 494
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_login]\">
            ";
        // line 497
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Login");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_login]\"
            name=\"mta[login]\"
            value=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "login", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>
      <!-- smtp: password -->
      <tr id=\"mta_password\" class=\"mailpoet_smtp_field\" data-field=\"password\"
        ";
        // line 513
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 515
            echo "        style=\"display:none;\"
        ";
        }
        // line 517
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_password]\">
            ";
        // line 520
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Password");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"password\"
            class=\"regular-text\"
            id=\"settings[mta_password]\"
            name=\"mta[password]\"
            value=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "password", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>
      <!-- smtp: security protocol -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"encryption\"
        ";
        // line 536
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 538
            echo "        style=\"display:none;\"
        ";
        }
        // line 540
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_encryption]\">
            ";
        // line 543
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secure Connection");
        echo "
          </label>
        </th>
        <td>
          <select id=\"settings[mta_encryption]\" name=\"mta[encryption]\">
            <option value=\"\">";
        // line 548
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</option>
            <option
              value=\"ssl\"
            ";
        // line 551
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "encryption", array()) == "ssl")) {
            // line 552
            echo "            selected=\"selected\"
            ";
        }
        // line 554
        echo "            >SSL</option>
            <option
              value=\"tls\"
            ";
        // line 557
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "encryption", array()) == "tls")) {
            // line 558
            echo "            selected=\"selected\"
            ";
        }
        // line 560
        echo "            >TLS</option>
          </select>
        </td>
      </tr>
      <!-- smtp: authentication -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"authentication\"
        ";
        // line 567
        if ((($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "smtp") || ($this->getAttribute(($context["settings"] ?? null), "smtp_provider", array()) != "manual"))) {
            // line 569
            echo "        style=\"display:none;\"
        ";
        }
        // line 571
        echo "      >
        <th scope=\"row\">
          <label>
            ";
        // line 574
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Authentication");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 577
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this option set to Yes. Only a tiny portion of SMTP services prefer Authentication to be turned off.");
        echo "
          </p>
        </th>
        <td>
          <label>
            <input
              type=\"radio\"
              value=\"1\"
              name=\"mta[authentication]\"
            ";
        // line 587
        if (( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "authentication", array()) || ($this->getAttribute($this->getAttribute(        // line 588
($context["settings"] ?? null), "mta", array()), "authentication", array()) == "1"))) {
            // line 589
            echo "            checked=\"checked\"
            ";
        }
        // line 591
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              value=\"-1\"
              name=\"mta[authentication]\"
            ";
        // line 599
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "mta", array()), "authentication", array()) == "-1")) {
            // line 600
            echo "            checked=\"checked\"
            ";
        }
        // line 602
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </td>
      </tr>
      </tbody>
    </table>
  </div>

  <table class=\"form-table\">
    <tbody>
      <!-- SPF -->
      <tr id=\"mailpoet_mta_spf\">
        <th scope=\"row\">
          <label>
            ";
        // line 616
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF Signature (Highly recommended!)");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 619
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This improves your delivery rate by verifying that you're allowed to send emails from your domain.");
        echo "
          </p>
        </th>
        <td>
          <p>
            ";
        // line 624
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF is set up in your DNS. Read your host's support documentation for more information.");
        echo "
          </p>
        </td>
      </tr>
      <!-- test method -->
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_mta_test_email\">
            ";
        // line 632
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Test the sending method");
        echo "
          </label>
        </th>
        <td>
          <p>
            <input
              type=\"text\"
              id=\"mailpoet_mta_test_email\"
              class=\"regular-text\"
              value=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current_user"] ?? null), "user_email", array()), "html", null, true);
        echo "\"
            />
            <a
              id=\"mailpoet_mta_test\"
              class=\"button-secondary\"
            >";
        // line 646
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send a test email");
        echo "</a>

            <span id=\"tooltip-test\"></span>
          </p>
        </td>
      </tr>
      <!-- activate or cancel -->
      <tr>
        <th scope=\"row\">
          <p>
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_save button button-primary\"
            >";
        // line 659
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</a>
            &nbsp;
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_cancel\"
            >";
        // line 664
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("or Cancel");
        echo "</a>
          </p>
        </th>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    var tooltip = '";
        // line 675
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Didn't receive the test email? Read our [link]quick guide[/link] to sending issues."), "http://beta.docs.mailpoet.com/article/146-my-newsletters-are-not-being-received", array("target" => "_blank")), "js"), "html", null, true);
        // line 677
        echo "'

    MailPoet.helpTooltip.show(document.getElementById(\"tooltip-test\"), {
      tooltipId: \"tooltip-settings-test\",
      tooltip: tooltip,
    });

    var sending_frequency_template =
      Handlebars.compile(\$('#mailpoet_sending_frequency_template').html());

    // om dom loaded
    \$(function() {
      // constrain number type inputs
      \$('input[type=\"number\"]').on('keyup', function() {
        var currentValue = \$(this).val();
        if(!currentValue) return;

        var minValue = \$(this).attr('min');
        var maxValue = \$(this).attr('max');
        \$(this).val(Math.min(Math.max(minValue, currentValue), maxValue));
      });

      // testing sending method
      \$('#mailpoet_mta_test').on('click', function() {
        // get test email and include it in data
        var recipient = \$('#mailpoet_mta_test_email').val();

        var settings = jQuery('#mailpoet_settings_form').mailpoetSerializeObject();
        var mailer = settings.mta;

        mailer.method = getMethodFromGroup(\$('#mailpoet_smtp_method').val());

        // check that we have a from address
        if(settings.sender.address.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 713
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email could not be sent. Make sure the option \"Email notifications\" has a FROM email address in the Basics tab."), "js"), "html", null, true);
        echo "',
            { scroll: true, static: true }
          );
        }

        MailPoet.Modal.loading(true);
        MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'mailer',
          action: 'send',
          data: {
            mailer: mailer,
            newsletter: {
              subject: \"";
        // line 726
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is a Sending Method Test");
        echo "\",
              body: {
                html: \"<p>";
        // line 728
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "</p>\",
                text: \"";
        // line 729
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "\"
              }
            },
            subscriber: recipient
          }
        }).always(function() {
          MailPoet.Modal.loading(false);
        }).done(function(response) {
          MailPoet.Notice.success(
            \"";
        // line 738
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email has been sent! Check your inbox."), "js"), "html", null, true);
        echo "\",
            { scroll: true }
          );
          trackTestEmailSent(mailer, true);
        }).fail(function(response) {
          if (response.errors.length > 0) {
            MailPoet.Notice.error(
              response.errors.map(function(error) { return _.escape(error.message); }),
              { scroll: true }
            );
          }
          trackTestEmailSent(mailer, false);
        });
      });

      // sending frequency update based on selected provider
      \$('#mailpoet_web_host').on('change keyup', renderHostSendingFrequency);

      // update manual sending frequency when values are changed
      \$('#other_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('other');
      });
      \$('#other_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('other');
      });

      // save configuration of a sending method
      \$('.mailpoet_sending_service_activate').on('click', function() {
        \$('#mta_group').val('mailpoet');
        saveSendingMethodConfiguration('mailpoet');
      });
      \$('.mailpoet_mta_setup_save').on('click', function() {
        \$('#mailpoet_smtp_method').trigger(\"change\");
        \$('#other_frequency_emails').trigger(\"change\");
        // get selected method
        var group = \$('.mailpoet_sending_method:visible').data('group');
        saveSendingMethodConfiguration(group);
      });
      \$('#mailpoet_smtp_method').on('change keyup', renderHostsSelect);
      \$('#mailpoet_sending_frequency').on('change keyup', sendingFrequencyMethodUpdated);

      ";
        // line 779
        if (($this->getAttribute(($context["settings"] ?? null), "mta_group", array()) != "mailpoet")) {
            // line 780
            echo "        \$('#mailpoet_smtp_method').trigger(\"change\");
        \$('#other_frequency_emails').trigger(\"change\");
      ";
        }
        // line 783
        echo "
      function saveSendingMethodConfiguration(group) {

        // set sending method
        if(group === undefined) {
          MailPoet.Notice.error(
            \"";
        // line 789
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("You have selected an invalid sending method."), "js"), "html", null, true);
        echo "\"
          );
        } else {
          // set new sending method active
          setSendingMethodGroup(group);

          // enforce signup confirmation depending on selected group
          setSignupConfirmation(group);

          // back to selection of sending methods
          MailPoet.Router.navigate('mta', { trigger: true });

          // save settings
          \$('.mailpoet_settings_submit > input').trigger('click');
        }
      }

      function setSignupConfirmation(group) {
        if (group === 'mailpoet') {
          // force signup confirmation (select \"Yes\")
          \$('.mailpoet_signup_confirmation[value=\"1\"]').attr('checked', true);
          \$('.mailpoet_signup_confirmation[value=\"\"]').attr('checked', false);

          // hide radio inputs
          \$('#mailpoet_signup_confirmation_input').hide();

          // show mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').show();

          // show signup confirmation options
          \$('#mailpoet_signup_options').show();
        } else {
          // show radio inputs
          \$('#mailpoet_signup_confirmation_input').show();

          // hide mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').hide();
        }
      }

      function setSendingMethodGroup(group) {
        // deactivate other sending methods
        \$('.mailpoet_sending_methods .mailpoet_active')
          .removeClass('mailpoet_active');

        // set active sending method
        \$('.mailpoet_sending_methods li[data-group=\"'+group+'\"]')
          .addClass('mailpoet_active');

        var method = getMethodFromGroup(\$('#mta_group').val());

        \$('#mta_method').val(method);

        // set MailPoet method description
        \$('#mailpoet_sending_method_active_text')
          .toggleClass('mailpoet_hidden', group !== 'mailpoet');
        \$('#mailpoet_sending_method_inactive_text')
          .toggleClass('mailpoet_hidden', group === 'mailpoet');

        // Hide server error notices
        \$('.mailpoet_notice_server').hide();

        updateMSSActivationUI();
      }

      function getMethodFromGroup(group) {
        var group = group || 'website';

        switch(group) {
          case 'mailpoet':
            return 'MailPoet';
          break;
          case 'server':
          case 'website':
            return 'PHPMail';
          break;
          case 'manual':
          case 'smtp':
            var method = \$('#mailpoet_smtp_provider').val();
            if(method === 'manual') {
              return 'SMTP';
            }
            return method;
          break;
          default:
            return group;
        }
      }

      // cancel configuration of a sending method
      \$('.mailpoet_mta_setup_cancel').on('click', function() {
        // back to selection of sending methods
        MailPoet.Router.navigate('mta', { trigger: true });
      });

      // render sending frequency form
      \$('#mailpoet_smtp_provider').trigger('change');
      \$('#mailpoet_web_host').trigger('change');

      function trackTestEmailSent(mailer, success) {
        MailPoet.trackEvent(
          'User has sent a test email from Settings',
          {
            'Sending was successful': !!success,
            'Sending method type': mailer.method,
            'MailPoet Free version': window.mailpoet_version
          }
        );
      }

      \$('.mailpoet_sending_methods_help a').on('click', function() {
        MailPoet.trackEvent(
          'User has clicked to view the sending comparison table',
          {'MailPoet Free version': window.mailpoet_version}
        );
      });
    });

    function setProviderForm() {
      // check provider
      var provider = \$(this).find('option:selected').first();
      var fields = provider.data('fields');

      if(fields === undefined) {
        fields = [
          'host',
          'port',
          'login',
          'password',
          'authentication',
          'encryption'
        ];
      } else {
        fields = fields.split(',');
      }

      \$('.mailpoet_smtp_field').hide();

      fields.map(function(field) {
        \$('.mailpoet_smtp_field[data-field=\"'+field+'\"]').show();
      });

      // update sending frequency
      renderSMTPSendingFrequency(provider);
    }

    function renderSMTPSendingFrequency() {
      // set sending frequency
      var emails = \$('#smtp_frequency_emails').val();
      var interval = \$('#smtp_frequency_interval').val();
      setSendingFrequency({
        output: '#mailpoet_smtp_daily_emails',
        only_daily: true,
        emails: emails,
        interval: interval
      });
      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function sendingFrequencyMethodUpdated() {
      var method = \$(this).find('option:selected').first();
      var sendingMethod = \$('#mailpoet_smtp_method').find('option:selected').first().val();
      if(method.val() === \"manual\") {
        \$('#mailpoet_sending_frequency_manual').show();
        \$('#mailpoet_recommended_daily_emails').hide();
        \$('#other_frequency_emails').trigger(\"change\");
      } else {
        \$('#mailpoet_sending_frequency_manual').hide();
        if(sendingMethod !== \"server\") {
          \$('#mailpoet_recommended_daily_emails').show();
        }
        \$('#mailpoet_smtp_method').trigger(\"change\");
      }
    }

    function renderHostsSelect() {
      var method = \$(this).find('option:selected').first();
      var val = method.val();

      if(val === \"server\") {
        \$('#mailpoet_sending_method_host').show();
        \$('#mta_group').val('website');
      } else {
        \$('#mailpoet_sending_method_host').hide();
      }
      if(val === \"manual\") {
        \$('.mailpoet_smtp_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('manual');
      } else {
        \$('.mailpoet_smtp_field').hide();
      }
      if(val === \"AmazonSES\") {
        \$('.mailpoet_aws_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('AmazonSES');
      } else {
        \$('.mailpoet_aws_field').hide();
      }
      if(val === \"SendGrid\") {
        \$('.mailpoet_sendgrid_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('SendGrid');
      } else {
        \$('.mailpoet_sendgrid_field').hide();
      }
      var emails = method.data('emails');
      var interval = method.data('interval');
      if(val === \"server\") {
        emails = \$('#mailpoet_web_host').find('option:selected').first().data('emails');
        interval = \$('#mailpoet_web_host').find('option:selected').first().data('interval');
      }
      const frequencyMethod = \$('#mailpoet_sending_frequency').find('option:selected').first().val();
      if(frequencyMethod === \"manual\") {
        \$('#mailpoet_recommended_daily_emails').hide();
        emails = \$('#other_frequency_emails').val();
        interval = \$('#other_frequency_interval').val();
      } else {
        \$('#mailpoet_recommended_daily_emails').show();
      }
      setSendingFrequency({
        output: '#mailpoet_recommended_daily_emails',
        only_daily: false,
        emails: emails,
        interval: interval
      });
      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function renderHostSendingFrequency() {
      var host = \$(this).find('option:selected').first();
      var frequencyType = \$(\"#mailpoet_sending_frequency\").find('option:selected').first().val();

      var emails =
        host.data('emails') || ";
        // line 1025
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "emails", array()), "html", null, true);
        echo ";
      var interval =
        host.data('interval') || ";
        // line 1027
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["default_frequency"] ?? null), "website", array()), "interval", array()), "html", null, true);
        echo ";
      var fields =
        host.data('fields') || '';

      if (frequencyType === \"manual\") {
        return;
      } else {
        setSendingFrequency({
          output: '#mailpoet_recommended_daily_emails',
          only_daily: false,
          emails: emails,
          interval: interval
        });
      }

      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function updateSendingFrequency(method) {
      // get emails
      var options = {
        only_daily: true,
        emails: \$('#'+method+'_frequency_emails').val(),
        interval: \$('#'+method+'_frequency_interval').val()
      };

      var MINUTES_PER_DAY = 1440;
      var SECONDS_PER_DAY = 86400;

      options.daily_emails = ~~(
        (MINUTES_PER_DAY / options.interval) * options.emails
      );

      options.emails_per_second = (~~(
        ((options.daily_emails) / 86400) * 10)
      ) / 10;


      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$('#mailpoet_'+method+'_daily_emails').html(
        sending_frequency_template(options)
      );

      // update actual sending frequency values
      \$('#mta_frequency_emails').val(options.emails);
      \$('#mta_frequency_interval').val(options.interval);
    }

    function setSendingFrequency(options) {
      options.daily_emails = ~~((1440 / options.interval) * options.emails);

      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$(options.output).html(
        sending_frequency_template(options)
      );
    }

    Handlebars.registerHelper('format_time', function(value, block) {
      var label = null;
      var labels = {
        minute: \"";
        // line 1092
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every minute");
        echo "\",
        minutes: \"";
        // line 1093
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d minutes");
        echo "\",
        hour: \"";
        // line 1094
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every hour");
        echo "\",
        hours: \"";
        // line 1095
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d hours");
        echo "\"
      };

      // cast time as int
      value = ~~(value);

      // format time depending on the value
      if(value >= 60) {
        // we're dealing with hours
        if(value === 60) {
          label = labels.hour;
        } else {
          label = labels.hours;
        }
        value /= 60;
      } else {
        // we're dealing with minutes
        if(value === 1) {
          label = labels.minute;
        } else {
          label = labels.minutes;
        }
      }

      if(label !== null) {
        return label.replace('%1\$d', value);
      } else {
        return value;
      }
    });
  });

  // enable/disable MSS method activate button and notice
  function updateMSSActivationUI() {
    var \$ = jQuery;
    var group = \$('.mailpoet_sending_methods .mailpoet_active').data('group');
    var key_valid = !\$('.mailpoet_mss_key_valid').hasClass('mailpoet_hidden');
    var activation_possible = group !== 'mailpoet' && key_valid;
    \$('.mailpoet_sending_service_activate').prop('disabled', !activation_possible);
    \$('.mailpoet_mss_activate_notice').toggle(activation_possible);
  }
</script>

";
        // line 1138
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "mailpoet_sending_frequency_template", "settings/templates/sending_frequency.hbs");
        // line 1141
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings/mta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1621 => 1141,  1619 => 1138,  1573 => 1095,  1569 => 1094,  1565 => 1093,  1561 => 1092,  1493 => 1027,  1488 => 1025,  1249 => 789,  1241 => 783,  1236 => 780,  1234 => 779,  1190 => 738,  1178 => 729,  1174 => 728,  1169 => 726,  1153 => 713,  1115 => 677,  1113 => 675,  1099 => 664,  1091 => 659,  1075 => 646,  1067 => 641,  1055 => 632,  1044 => 624,  1036 => 619,  1030 => 616,  1012 => 602,  1008 => 600,  1006 => 599,  994 => 591,  990 => 589,  988 => 588,  987 => 587,  975 => 577,  969 => 574,  964 => 571,  960 => 569,  958 => 567,  950 => 560,  946 => 558,  944 => 557,  939 => 554,  935 => 552,  933 => 551,  927 => 548,  919 => 543,  914 => 540,  910 => 538,  908 => 536,  899 => 529,  887 => 520,  882 => 517,  878 => 515,  876 => 513,  867 => 506,  855 => 497,  850 => 494,  846 => 492,  844 => 490,  834 => 482,  822 => 473,  817 => 470,  813 => 468,  811 => 466,  802 => 458,  799 => 457,  797 => 456,  784 => 446,  779 => 443,  775 => 441,  773 => 439,  764 => 431,  761 => 430,  759 => 429,  746 => 419,  741 => 416,  737 => 414,  735 => 412,  727 => 405,  718 => 402,  715 => 401,  711 => 399,  709 => 398,  705 => 397,  702 => 396,  698 => 395,  694 => 393,  691 => 392,  689 => 391,  679 => 384,  674 => 381,  670 => 379,  668 => 377,  658 => 369,  643 => 357,  638 => 354,  634 => 352,  632 => 350,  624 => 344,  612 => 335,  606 => 332,  601 => 329,  597 => 327,  595 => 325,  586 => 318,  579 => 313,  572 => 311,  566 => 309,  564 => 308,  560 => 307,  557 => 306,  553 => 304,  550 => 303,  546 => 301,  544 => 299,  543 => 298,  539 => 296,  536 => 295,  532 => 294,  527 => 292,  524 => 291,  518 => 289,  512 => 287,  510 => 286,  501 => 279,  497 => 277,  495 => 275,  486 => 268,  483 => 267,  479 => 265,  477 => 263,  471 => 259,  457 => 248,  447 => 240,  438 => 238,  434 => 236,  432 => 235,  428 => 234,  424 => 233,  420 => 232,  417 => 231,  413 => 230,  408 => 228,  389 => 212,  384 => 209,  380 => 207,  378 => 205,  371 => 199,  362 => 197,  358 => 195,  356 => 194,  352 => 193,  348 => 192,  344 => 191,  340 => 190,  337 => 189,  333 => 188,  329 => 187,  323 => 184,  320 => 183,  316 => 181,  314 => 179,  308 => 175,  295 => 165,  282 => 154,  280 => 151,  278 => 149,  276 => 148,  266 => 141,  259 => 137,  251 => 132,  248 => 131,  246 => 127,  242 => 126,  238 => 125,  234 => 124,  229 => 122,  224 => 120,  220 => 118,  216 => 117,  205 => 110,  201 => 109,  192 => 103,  182 => 98,  176 => 95,  170 => 92,  161 => 88,  157 => 87,  153 => 86,  149 => 85,  145 => 84,  141 => 83,  135 => 80,  127 => 77,  120 => 73,  115 => 71,  107 => 68,  100 => 64,  95 => 61,  91 => 60,  81 => 53,  70 => 45,  61 => 39,  50 => 31,  40 => 24,  31 => 18,  23 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/mta.html", "C:\\xampp\\htdocs\\formation-front\\formation-front\\monsite_marinegregoire\\wp-content\\plugins\\mailpoet\\views\\settings\\mta.html");
    }
}
