## 🧹 How to Completely Remove Docker from Ubuntu

Follow these steps to fully uninstall Docker and clean up all associated files and configurations.

---

## Step 1: Stop Docker Services

```bash
sudo systemctl stop docker
sudo systemctl stop docker.socket
````

---

## Step 2: Uninstall Docker Packages

```bash
sudo apt-get purge -y docker-engine docker docker.io docker-ce docker-ce-cli containerd runc
```

---

## Step 3: Remove Docker Dependencies and Clean Up

```bash
sudo apt-get autoremove -y --purge docker-engine docker docker.io docker-ce
sudo apt-get autoclean
```

---

## Step 4: Delete Docker Files and Directories

```bash
sudo rm -rf /var/lib/docker
sudo rm -rf /etc/docker
sudo rm -rf /var/run/docker.sock
sudo rm -rf /var/lib/containerd
```

---

## Step 5: Remove Docker Group (Optional)

```bash
sudo groupdel docker
```

---

## Step 6: Verify Removal

```bash
docker --version
```

Expected output:

```
Command 'docker' not found
```

---

> ✅ Docker has now been fully removed from your system.

```

---
