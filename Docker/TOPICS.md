# 🐳 Docker Topics (Beginner to Advanced)

## 🔹 Basics
- What is Docker?
- Docker vs Virtual Machines
- Docker Architecture (Docker Engine, CLI, Daemon, Registry)
- Docker Installation (Linux/Windows)
- Docker Hub & Images

## 🔹 Docker CLI & Image Management
- `docker pull`, `docker build`, `docker run`
- `docker ps`, `docker exec`, `docker logs`, `docker stop`, `docker rm`
- Dockerfile syntax & best practices
- Layers & Caching in Dockerfile
- Tagging & Versioning Images

## 🔹 Volumes & Networking
- Docker Volumes: named, anonymous, bind mounts
- Docker Networks: bridge, host, overlay
- Port binding, `EXPOSE` and `-p`

## 🔹 Docker Compose
- What is Docker Compose?
- `docker-compose.yml` file structure
- `docker-compose up`, `down`, `logs`, `build`
- Multi-container setup (e.g., app + DB + monitoring)

## 🔹 Advanced Docker
- Multi-stage builds
- Docker Security Basics
- Docker Logging & Monitoring
- Docker Swarm (optional)
- Docker with CI/CD pipelines
- Docker with Kubernetes

---

# ⚙️ Ansible Topics (Beginner to Advanced)

## 🔹 Basics
- What is Ansible?
- Agentless Architecture
- YAML & Ansible syntax basics
- Inventory file (`hosts`)

## 🔹 Core Concepts
- Ad-hoc Commands (`ansible all -m ping`)
- Playbooks and their structure
- Modules: `copy`, `file`, `service`, `yum`, `apt`, `command`, `shell`, `debug`, etc.
- Variables & Facts
- Conditional Statements (`when`)
- Loops & Iterations (`with_items`, `loop`)
- Handlers & Notifications

## 🔹 Roles & Reusability
- Ansible Roles: structure, usage
- Templates (`.j2` files) and `jinja2` syntax
- Include & Import
- Tags

## 🔹 Vault & Security
- Ansible Vault (encryption of secrets)
- `ansible-vault encrypt/view/edit`

## 🔹 Advanced Usage
- Ansible with SSH Keys
- Error Handling (`ignore_errors`, `block/rescue`)
- Ansible Pull
- Dynamic Inventory (e.g., AWS EC2 inventory plugin)
- Integration with Jenkins or CI/CD tools
- Writing Custom Modules (Python)
