marp: true paginate: true theme: default style: | section { --deep-twilight: #03045e; --french-blue: #023e8a; --bright-teal-blue: #0077b6; --blue-green: #0096c7; --turquoise-surf: #00b4d8; --sky-aqua: #48cae4; --frosted-blue: #90e0ef; --frosted-blue-2: #ade8f4; --light-cyan: #caf0f8;

background-color: var(--light-cyan);
background-image: linear-gradient(90deg, var(--deep-twilight), var(--bright-teal-blue), var(--sky-aqua));
background-size: 100% 14px;
background-repeat: no-repeat;
color: var(--deep-twilight);
font-size: 26px;
} section h1 { color: var(--french-blue); } section h2 { color: var(--bright-teal-blue); border-bottom: 3px solid var(--sky-aqua); padding-bottom: 6px; } section strong { color: var(--french-blue); } section a { color: var(--blue-green); } section li::marker { color: var(--turquoise-surf); } section code { background: var(--frosted-blue-2); color: var(--deep-twilight); border-radius: 4px; padding: 0 4px; } section pre { font-size: 18px; background: #f1fbfe; border: 1px solid var(--frosted-blue); border-left: 6px solid var(--blue-green); border-radius: 6px; } section pre code { background: transparent; padding: 0; } table { font-size: 20px; border-collapse: collapse; } th { background: var(--french-blue); color: var(--light-cyan); } td, th { border: 1px solid var(--frosted-blue); padding: 6px 10px; } tr:nth-child(odd) td { background: var(--light-cyan); } tr:nth-child(even) td { background: var(--frosted-blue-2); } section::after { color: var(--bright-teal-blue); font-weight: bold; }

section blockquote { background: var(--frosted-blue-2); border-left: 6px solid var(--turquoise-surf); color: var(--deep-twilight); font-size: 20px; padding: 4px 14px; margin: 0 0 14px 0; } section blockquote::before, section blockquote::after { content: none; }

/* Title slide */ section.lead { background-color: var(--deep-twilight); background-image: linear-gradient(135deg, var(--deep-twilight) 0%, var(--french-blue) 60%, var(--bright-teal-blue) 100%); background-size: 100% 100%; color: var(--light-cyan); justify-content: center; } section.lead h1 { color: var(--light-cyan); font-size: 52px; } section.lead h2 { color: var(--frosted-blue); border-bottom: 3px solid var(--sky-aqua); }
<!-- _class: lead --> <!-- _paginate: false -->

Lab: Object-Oriented Programming in PHP
From Spaghetti Code to Clean Architecture
Ahmed El Morabiti

Formateur: Fouad Essarraj

1. Planning
Objectives:
Explain which problems OOP solves compared to procedural PHP.
Master the basics: classes, objects, visibility, constructors, static.
Apply the four pillars: encapsulation, inheritance, polymorphism, abstraction.
Use advanced features: interfaces, traits, enums, readonly, dependency injection.
Prerequisites: PHP syntax (variables, functions, arrays), PHP 8.1+ installed, a terminal.
Steps:
Spot the problems of procedural code.
Learn the building blocks of OOP.
... (571 lignes restantes)