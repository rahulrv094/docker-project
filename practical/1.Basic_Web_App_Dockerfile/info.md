````md
# Write a Dockerfile to run a simple Python Flask app (`app.py`)

---

## 🐳 Why We Use Two COPY Steps:

### ✅ Best Practice (2-step COPY)

```dockerfile
COPY requirements.txt .
RUN pip install -r requirements.txt
COPY . .
````

### 🚀 Benefits:

**Better Layer Caching in Docker builds:**

* Docker caches each layer in the build.
* If `requirements.txt` hasn’t changed, Docker reuses the cached `pip install` layer.
* Only when `requirements.txt` changes, it re-runs `pip install`.
* Your code (`app.py`, etc.) can change without re-installing all dependencies.
* Faster rebuilds after code changes.

---

### ❌ If you only do this:

```dockerfile
COPY . .
RUN pip install -r requirements.txt
```

Every time you change any file (like `app.py`, `README`, etc.), Docker thinks the whole context changed and re-runs `pip install`, which is slow and unnecessary.

```
