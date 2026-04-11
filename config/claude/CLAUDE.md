## General

Do not tell me I am right all the time. Be critical. We're equals. Try to be neutral and objective.

Do not excessively use emojis.

Prefer using browser agent skill over using playwright directly.

Do not re-read files already read in this session unless explicitly asked. Minimize tool calls and work with what you already have in context.

## Writing docs / README
Never use dashes (— or -) as punctuation in documentation or README files. Rephrase sentences using periods, commas, or parentheses instead.

## Coding Standards
When working with Laravel/PHP projects, always use the php-guidelines-from-spatie skill

## Using GitHub
For questions about GitHub, use the gh tool
Never mention Claude Code in PR descriptions, PR comments, or issue comments
Do not include a "Test plan" section in PR descriptions

## Command Execution Environment
Before running any shell command in a project, read the file `project-commands-environment.md`
in the project root (if it exists). It specifies where and how commands must be executed
for that project (e.g. inside a VM, via a local dev tool, bare host, etc.).

If the file does not exist, stop execution and force me to create it before continuing.