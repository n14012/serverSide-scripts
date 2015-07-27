<?php

/* output.tpl */
class __TwigTemplate_db0ae70c964258055a40d2817f7bfcae722377f64acd95a1e222b91cd8c89d72 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta name=\"charset\" content=\"UTF-8\">
    <title>学生管理システム 表示画面</title>
  </head>
  <body>
    <h1>学生管理システム 表示画面</h1>
    <h2>学籍番号</h2>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "</p>
    <h2>名前</h2>
    <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["Name"]) ? $context["Name"] : null), "html", null, true);
        echo "</p>
    <h2>学科</h2>
    <p>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "</p>
    <h2>作成日</h2>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["create_date"]) ? $context["create_date"] : null), "html", null, true);
        echo "</p>
    <h2>成績</h2>
    <p>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["score"]) ? $context["score"] : null), "html", null, true);
        echo "</p>


    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "output.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  45 => 16,  40 => 14,  35 => 12,  30 => 10,  19 => 1,);
    }
}
