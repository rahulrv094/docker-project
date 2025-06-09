**********To completely remove Docker from Ubuntu:

## Step 1: Stop Docker Service
'''
sudo systemctl stop docker
sudo systemctl stop docker.socket
'''

---

## Step 2: Uninstall Docker Packages

'''
sudo apt-get purge -y docker-engine docker docker.io docker-ce docker-ce-cli containerd runc
'''
---

## Step 3: Remove Docker Dependencies and Cleanup
'''
sudo apt-get autoremove -y --purge docker-engine docker docker.io docker-ce
sudo apt-get autoclean
'''

---

##  Step 4: Delete All Docker Files and Directories
sudo rm -rf /var/lib/docker
sudo rm -rf /etc/docker
sudo rm -rf /var/run/docker.sock
sudo rm -rf /var/lib/containerd

---

## Step 5: Remove Docker Group (Optional)
sudo groupdel docker
**********************
