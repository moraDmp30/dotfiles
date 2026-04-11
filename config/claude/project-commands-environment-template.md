# Command Execution Environment

## Project type

<!-- Pick ONE -->
- [ ] Laravel
- [ ] WordPress
- [ ] Other: ___________

## Versions

| Component  | Version |
|------------|---------|
| PHP        |         |
| Laravel    |         | <!-- remove if not Laravel -->
| WordPress  |         | <!-- remove if not WordPress -->
| Node       |         | <!-- e.g. 20.11.0 — managed via nvm -->
| npm        |         | <!-- usually comes with Node, but specify if pinned -->

> If a `.nvmrc` file is present in the project root, Node version is managed there.
> Run `nvm use` with no arguments before any `npm` or `node` command.

---

## How to run commands in this project

<!-- Pick ONE of the options below and delete the rest -->


### Option A — Laravel Homestead virtual machine

**All PHP-related commands** must be run inside the VM via SSH: `php artisan`, `composer`, `vendor/bin/pint`, `vendor/bin/phpunit`, `php please`, etc.

> ⚠️ Always use `phpX.X` instead of `php` when running PHP commands in the VM — the default `php` binary may point to a different version. Example: `php8.2 artisan migrate`

**Project path inside VM:** `/home/vagrant/<project_path>`   <!-- update this -->
**Project path on host:** `/Users/mora/Documents/<project_path>`   <!-- update this -->

Run all `composer`, `artisan` (Laravel), `wp` (WordPress), and test commands from inside the VM.
Do NOT run them on the host machine.

- To execute a command inside the VM, use:
```bash
  homestead ssh -- "cd /home/vagrant/<project_path> && <command>"
```
  For example:
```bash
  homestead ssh -- "cd /home/vagrant/Projects/<project_path> && php8.2 artisan test --compact"
```

**npm commands** must be run on the host machine directly (e.g., `npm run build`, `npm run dev`). Do NOT run npm inside the VM.

Before running any `npm` or `node` command, activate the correct Node version:

```bash
nvm use   # uses .nvmrc if present
# or
nvm use 20.11.0   # specify version explicitly if no .nvmrc
```

When in doubt, any command not explicitly specified above should be run inside the VM, not on the host.

---

### Option B — Laravel Herd

> Laravel projects only.

Commands run directly on the host. Herd manages PHP and the local server.

- PHP binary: managed by Herd (check active version with `herd php --version`)
- Run everything from the project root on the host
- Use `herd open` to launch in browser if needed

**npm commands** run directly on the host as well. Before any `npm` or `node` command, activate the correct Node version:

```bash
nvm use   # uses .nvmrc if present
# or
nvm use 20.11.0   # specify version explicitly if no .nvmrc
```
