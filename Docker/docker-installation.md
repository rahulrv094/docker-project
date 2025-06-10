
## 📦 Docker Installation & Uninstallation Guide

---

### ✅ For **CentOS 7 / 8 / Stream / RHEL**

#### 🔧 Install Docker

```bash
# 1. Remove older versions if any
sudo yum remove docker \
                docker-client \
                docker-client-latest \
                docker-common \
                docker-latest \
                docker-latest-logrotate \
                docker-logrotate \
                docker-engine

# 2. Install required packages
sudo yum install -y yum-utils

# 3. Add Docker repository
sudo yum-config-manager --add-repo https://download.docker.com/linux/centos/docker-ce.repo

# 4. Install Docker Engine
sudo yum install -y docker-ce docker-ce-cli containerd.io

# 5. Start and enable Docker
sudo systemctl start docker
sudo systemctl enable docker

# 6. Verify installation
docker --version
```

#### ❌ Uninstall Docker (CentOS)

```bash
# 1. Stop Docker
sudo systemctl stop docker

# 2. Remove packages
sudo yum remove -y docker-ce docker-ce-cli containerd.io

# 3. Remove Docker data (optional)
sudo rm -rf /var/lib/docker
sudo rm -rf /var/lib/containerd
```

---

### ✅ For **Ubuntu 20.04 / 22.04 / Debian-based**

#### 🔧 Install Docker

```bash
# 1. Remove older versions if any
sudo apt-get remove docker docker-engine docker.io containerd runc

# 2. Update and install packages
sudo apt-get update
sudo apt-get install -y ca-certificates curl gnupg lsb-release

# 3. Add Docker’s official GPG key
sudo mkdir -p /etc/apt/keyrings
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | \
  sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg

# 4. Set up the repository
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] \
  https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" | \
  sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

# 5. Install Docker Engine
sudo apt-get update
sudo apt-get install -y docker-ce docker-ce-cli containerd.io docker-buildx-plugin docker-compose-plugin

# 6. Start Docker
sudo systemctl start docker
sudo systemctl enable docker

# 7. Verify installation
docker --version
```

#### ❌ Uninstall Docker (Ubuntu)

```bash
# 1. Stop Docker
sudo systemctl stop docker

# 2. Remove packages
sudo apt-get purge -y docker-ce docker-ce-cli containerd.io \
                      docker-buildx-plugin docker-compose-plugin

# 3. Remove Docker data (optional)
sudo rm -rf /var/lib/docker
sudo rm -rf /var/lib/containerd
```

---

### ⚙️ (Optional) Post-Install: Run Docker as Non-root

```bash
# Add your user to the docker group
sudo usermod -aG docker $USER

# Apply the group change
newgrp docker

# Test without sudo
docker run hello-world
```

---
