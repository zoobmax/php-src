--TEST--
Test sprintf() function : usage variations - string formats with string values
--FILE--
<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string 
 * Source code: ext/standard/formatted_print.c
*/


echo "*** Testing sprintf() : string formats with string values ***\n";

// defining different heredoc strings
/* string created using Heredoc (<<<) */
$heredoc_string = <<<EOT
This is string defined
using heredoc.
EOT;

/* heredoc string with only numerics */
$heredoc_numeric_string = <<<EOT
123456 3993
4849 string
EOT;

/* null heardoc string */
$heredoc_empty_string = <<<EOT
EOT;
$heredoc_null_string = <<<EOT
NULL
EOT;

// array of strings used to test the function
$string_values = array(
  "",
  " ",
  '',
  ' ',
  "string",
  'string',
  "NULL",
  'null',
  "FALSE",
  'true',
  "\x0b",
  "\0",
  '\0',
  '\060',
  "\070",
  "0x55F",
  "055",
  "@#$#$%%$^^$%^%^$^&",
  $heredoc_string,
  $heredoc_numeric_string,
  $heredoc_empty_string,
  $heredoc_null_string
);

// array of string formats
$string_formats = array( 
  "%s", "%hs", "%ls",
  "%Ls"," %s", "%s ",
  "\t%s", "\n%s", "%4s",
  "%30s", "%[a-zA-Z0-9]", "%*s"
);

$count = 1;
foreach($string_values as $string_value) {
  echo "\n-- Iteration $count --\n";
  
  foreach($string_formats as $format) {
    var_dump( sprintf($format, $string_value) );
  }
  $count++;
};

echo "Done";
?>
--EXPECTF--
*** Testing sprintf() : string formats with string values ***

-- Iteration 1 --
string(0) ""
string(1) "s"
string(0) ""
string(1) "s"
string(1) " "
string(1) " "
string(1) "	"
string(1) "
"
string(4) "    "
string(30) "                              "
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 2 --
string(1) " "
string(1) "s"
string(1) " "
string(1) "s"
string(2) "  "
string(2) "  "
string(2) "	 "
string(2) "
 "
string(4) "    "
string(30) "                              "
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 3 --
string(0) ""
string(1) "s"
string(0) ""
string(1) "s"
string(1) " "
string(1) " "
string(1) "	"
string(1) "
"
string(4) "    "
string(30) "                              "
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 4 --
string(1) " "
string(1) "s"
string(1) " "
string(1) "s"
string(2) "  "
string(2) "  "
string(2) "	 "
string(2) "
 "
string(4) "    "
string(30) "                              "
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 5 --
string(6) "string"
string(1) "s"
string(6) "string"
string(1) "s"
string(7) " string"
string(7) "string "
string(7) "	string"
string(7) "
string"
string(6) "string"
string(30) "                        string"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 6 --
string(6) "string"
string(1) "s"
string(6) "string"
string(1) "s"
string(7) " string"
string(7) "string "
string(7) "	string"
string(7) "
string"
string(6) "string"
string(30) "                        string"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 7 --
string(4) "NULL"
string(1) "s"
string(4) "NULL"
string(1) "s"
string(5) " NULL"
string(5) "NULL "
string(5) "	NULL"
string(5) "
NULL"
string(4) "NULL"
string(30) "                          NULL"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 8 --
string(4) "null"
string(1) "s"
string(4) "null"
string(1) "s"
string(5) " null"
string(5) "null "
string(5) "	null"
string(5) "
null"
string(4) "null"
string(30) "                          null"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 9 --
string(5) "FALSE"
string(1) "s"
string(5) "FALSE"
string(1) "s"
string(6) " FALSE"
string(6) "FALSE "
string(6) "	FALSE"
string(6) "
FALSE"
string(5) "FALSE"
string(30) "                         FALSE"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 10 --
string(4) "true"
string(1) "s"
string(4) "true"
string(1) "s"
string(5) " true"
string(5) "true "
string(5) "	true"
string(5) "
true"
string(4) "true"
string(30) "                          true"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 11 --
string(1) ""
string(1) "s"
string(1) ""
string(1) "s"
string(2) " "
string(2) " "
string(2) "	"
string(2) "
"
string(4) "   "
string(30) "                             "
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 12 --
string(1) " "
string(1) "s"
string(1) " "
string(1) "s"
string(2) "  "
string(2) "  "
string(2) "	 "
string(2) "
 "
string(4) "    "
string(30) "                              "
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 13 --
string(2) "\0"
string(1) "s"
string(2) "\0"
string(1) "s"
string(3) " \0"
string(3) "\0 "
string(3) "	\0"
string(3) "
\0"
string(4) "  \0"
string(30) "                            \0"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 14 --
string(4) "\060"
string(1) "s"
string(4) "\060"
string(1) "s"
string(5) " \060"
string(5) "\060 "
string(5) "	\060"
string(5) "
\060"
string(4) "\060"
string(30) "                          \060"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 15 --
string(1) "8"
string(1) "s"
string(1) "8"
string(1) "s"
string(2) " 8"
string(2) "8 "
string(2) "	8"
string(2) "
8"
string(4) "   8"
string(30) "                             8"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 16 --
string(5) "0x55F"
string(1) "s"
string(5) "0x55F"
string(1) "s"
string(6) " 0x55F"
string(6) "0x55F "
string(6) "	0x55F"
string(6) "
0x55F"
string(5) "0x55F"
string(30) "                         0x55F"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 17 --
string(3) "055"
string(1) "s"
string(3) "055"
string(1) "s"
string(4) " 055"
string(4) "055 "
string(4) "	055"
string(4) "
055"
string(4) " 055"
string(30) "                           055"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 18 --
string(18) "@#$#$%%$^^$%^%^$^&"
string(1) "s"
string(18) "@#$#$%%$^^$%^%^$^&"
string(1) "s"
string(19) " @#$#$%%$^^$%^%^$^&"
string(19) "@#$#$%%$^^$%^%^$^& "
string(19) "	@#$#$%%$^^$%^%^$^&"
string(19) "
@#$#$%%$^^$%^%^$^&"
string(18) "@#$#$%%$^^$%^%^$^&"
string(30) "            @#$#$%%$^^$%^%^$^&"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 19 --
string(37) "This is string defined
using heredoc."
string(1) "s"
string(37) "This is string defined
using heredoc."
string(1) "s"
string(38) " This is string defined
using heredoc."
string(38) "This is string defined
using heredoc. "
string(38) "	This is string defined
using heredoc."
string(38) "
This is string defined
using heredoc."
string(37) "This is string defined
using heredoc."
string(37) "This is string defined
using heredoc."
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 20 --
string(23) "123456 3993
4849 string"
string(1) "s"
string(23) "123456 3993
4849 string"
string(1) "s"
string(24) " 123456 3993
4849 string"
string(24) "123456 3993
4849 string "
string(24) "	123456 3993
4849 string"
string(24) "
123456 3993
4849 string"
string(23) "123456 3993
4849 string"
string(30) "       123456 3993
4849 string"
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 21 --
string(0) ""
string(1) "s"
string(0) ""
string(1) "s"
string(1) " "
string(1) " "
string(1) "	"
string(1) "
"
string(4) "    "
string(30) "                              "
string(10) "a-zA-Z0-9]"
string(1) "s"

-- Iteration 22 --
string(4) "NULL"
string(1) "s"
string(4) "NULL"
string(1) "s"
string(5) " NULL"
string(5) "NULL "
string(5) "	NULL"
string(5) "
NULL"
string(4) "NULL"
string(30) "                          NULL"
string(10) "a-zA-Z0-9]"
string(1) "s"
Done

--UEXPECTF--
*** Testing sprintf() : string formats with string values ***

-- Iteration 1 --
unicode(0) ""
unicode(1) "s"
unicode(0) ""
unicode(1) "s"
unicode(1) " "
unicode(1) " "
unicode(1) "	"
unicode(1) "
"
unicode(4) "    "
unicode(30) "                              "
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 2 --
unicode(1) " "
unicode(1) "s"
unicode(1) " "
unicode(1) "s"
unicode(2) "  "
unicode(2) "  "
unicode(2) "	 "
unicode(2) "
 "
unicode(4) "    "
unicode(30) "                              "
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 3 --
unicode(0) ""
unicode(1) "s"
unicode(0) ""
unicode(1) "s"
unicode(1) " "
unicode(1) " "
unicode(1) "	"
unicode(1) "
"
unicode(4) "    "
unicode(30) "                              "
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 4 --
unicode(1) " "
unicode(1) "s"
unicode(1) " "
unicode(1) "s"
unicode(2) "  "
unicode(2) "  "
unicode(2) "	 "
unicode(2) "
 "
unicode(4) "    "
unicode(30) "                              "
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 5 --
unicode(6) "string"
unicode(1) "s"
unicode(6) "string"
unicode(1) "s"
unicode(7) " string"
unicode(7) "string "
unicode(7) "	string"
unicode(7) "
string"
unicode(6) "string"
unicode(30) "                        string"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 6 --
unicode(6) "string"
unicode(1) "s"
unicode(6) "string"
unicode(1) "s"
unicode(7) " string"
unicode(7) "string "
unicode(7) "	string"
unicode(7) "
string"
unicode(6) "string"
unicode(30) "                        string"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 7 --
unicode(4) "NULL"
unicode(1) "s"
unicode(4) "NULL"
unicode(1) "s"
unicode(5) " NULL"
unicode(5) "NULL "
unicode(5) "	NULL"
unicode(5) "
NULL"
unicode(4) "NULL"
unicode(30) "                          NULL"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 8 --
unicode(4) "null"
unicode(1) "s"
unicode(4) "null"
unicode(1) "s"
unicode(5) " null"
unicode(5) "null "
unicode(5) "	null"
unicode(5) "
null"
unicode(4) "null"
unicode(30) "                          null"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 9 --
unicode(5) "FALSE"
unicode(1) "s"
unicode(5) "FALSE"
unicode(1) "s"
unicode(6) " FALSE"
unicode(6) "FALSE "
unicode(6) "	FALSE"
unicode(6) "
FALSE"
unicode(5) "FALSE"
unicode(30) "                         FALSE"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 10 --
unicode(4) "true"
unicode(1) "s"
unicode(4) "true"
unicode(1) "s"
unicode(5) " true"
unicode(5) "true "
unicode(5) "	true"
unicode(5) "
true"
unicode(4) "true"
unicode(30) "                          true"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 11 --
unicode(1) ""
unicode(1) "s"
unicode(1) ""
unicode(1) "s"
unicode(2) " "
unicode(2) " "
unicode(2) "	"
unicode(2) "
"
unicode(4) "   "
unicode(30) "                             "
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 12 --
unicode(1) " "
unicode(1) "s"
unicode(1) " "
unicode(1) "s"
unicode(2) "  "
unicode(2) "  "
unicode(2) "	 "
unicode(2) "
 "
unicode(4) "    "
unicode(30) "                              "
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 13 --
unicode(2) "\0"
unicode(1) "s"
unicode(2) "\0"
unicode(1) "s"
unicode(3) " \0"
unicode(3) "\0 "
unicode(3) "	\0"
unicode(3) "
\0"
unicode(4) "  \0"
unicode(30) "                            \0"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 14 --
unicode(4) "\060"
unicode(1) "s"
unicode(4) "\060"
unicode(1) "s"
unicode(5) " \060"
unicode(5) "\060 "
unicode(5) "	\060"
unicode(5) "
\060"
unicode(4) "\060"
unicode(30) "                          \060"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 15 --
unicode(1) "8"
unicode(1) "s"
unicode(1) "8"
unicode(1) "s"
unicode(2) " 8"
unicode(2) "8 "
unicode(2) "	8"
unicode(2) "
8"
unicode(4) "   8"
unicode(30) "                             8"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 16 --
unicode(5) "0x55F"
unicode(1) "s"
unicode(5) "0x55F"
unicode(1) "s"
unicode(6) " 0x55F"
unicode(6) "0x55F "
unicode(6) "	0x55F"
unicode(6) "
0x55F"
unicode(5) "0x55F"
unicode(30) "                         0x55F"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 17 --
unicode(3) "055"
unicode(1) "s"
unicode(3) "055"
unicode(1) "s"
unicode(4) " 055"
unicode(4) "055 "
unicode(4) "	055"
unicode(4) "
055"
unicode(4) " 055"
unicode(30) "                           055"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 18 --
unicode(18) "@#$#$%%$^^$%^%^$^&"
unicode(1) "s"
unicode(18) "@#$#$%%$^^$%^%^$^&"
unicode(1) "s"
unicode(19) " @#$#$%%$^^$%^%^$^&"
unicode(19) "@#$#$%%$^^$%^%^$^& "
unicode(19) "	@#$#$%%$^^$%^%^$^&"
unicode(19) "
@#$#$%%$^^$%^%^$^&"
unicode(18) "@#$#$%%$^^$%^%^$^&"
unicode(30) "            @#$#$%%$^^$%^%^$^&"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 19 --
unicode(37) "This is string defined
using heredoc."
unicode(1) "s"
unicode(37) "This is string defined
using heredoc."
unicode(1) "s"
unicode(38) " This is string defined
using heredoc."
unicode(38) "This is string defined
using heredoc. "
unicode(38) "	This is string defined
using heredoc."
unicode(38) "
This is string defined
using heredoc."
unicode(37) "This is string defined
using heredoc."
unicode(37) "This is string defined
using heredoc."
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 20 --
unicode(23) "123456 3993
4849 string"
unicode(1) "s"
unicode(23) "123456 3993
4849 string"
unicode(1) "s"
unicode(24) " 123456 3993
4849 string"
unicode(24) "123456 3993
4849 string "
unicode(24) "	123456 3993
4849 string"
unicode(24) "
123456 3993
4849 string"
unicode(23) "123456 3993
4849 string"
unicode(30) "       123456 3993
4849 string"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 21 --
unicode(0) ""
unicode(1) "s"
unicode(0) ""
unicode(1) "s"
unicode(1) " "
unicode(1) " "
unicode(1) "	"
unicode(1) "
"
unicode(4) "    "
unicode(30) "                              "
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"

-- Iteration 22 --
unicode(4) "NULL"
unicode(1) "s"
unicode(4) "NULL"
unicode(1) "s"
unicode(5) " NULL"
unicode(5) "NULL "
unicode(5) "	NULL"
unicode(5) "
NULL"
unicode(4) "NULL"
unicode(30) "                          NULL"
unicode(10) "a-zA-Z0-9]"
unicode(1) "s"
Done