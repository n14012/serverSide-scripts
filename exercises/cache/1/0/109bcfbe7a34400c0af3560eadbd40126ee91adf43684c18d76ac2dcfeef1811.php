<?php

/* done.tpl */
class __TwigTemplate_109bcfbe7a34400c0af3560eadbd40126ee91adf43684c18d76ac2dcfeef1811 extends Twig_Template
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
    <title>学生管理システム 投稿完了画面</title>
  </head>
  <body>
    <h1>学生管理システム 投稿完了</h1>
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

    で、投稿しました！
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "done.tpl";
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
