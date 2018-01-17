<?php
// Building an inheritance hierarchy of creator classes
// Построение иерархии наследования классов создателя

abstract class getWikiText
{
  abstract public function getText(): string;
}

class BloggsApptGetWikiText extends getWikiText
{
  public function getText(): string
  {
    return " BloggsApptGetWikiText ";
  }
}

abstract class blogMgr
{
  abstract public function getfirstText(): string;
  abstract public function getsecondText(): string;
  abstract public function getWikiText(): getWikiText;
}

class newBlogMgr extends blogMgr
{
  public function getfirstText(): string
  {
    return "first text from newBlogMgr <br />";
  }
  public function getsecondText(): string
  {
    return "second text from newBlogMgr <br />";
  }
  public function getWikiText(): getWikiText
  {
    return new BloggsApptGetWikiText();
  }
}



$test = new newBlogMgr();
print $test->getfirstText();
print $test->getsecondText();
print $test->getWikiText()->getText();
