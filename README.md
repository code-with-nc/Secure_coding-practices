# 🐳 Docker Practicals – Secure Coding Practices

This folder contains Docker-based practical labs for learning secure coding, vulnerable application behavior, authentication security, session handling, containerized web application deployment, and web security testing.

These labs are designed for students, cyber security learners, secure coding researchers, and web application security practitioners to understand both vulnerable and secure implementations inside isolated Docker environments.

---

# 🚀 Tech Stack

## Backend & Web Technologies

- Python
- Flask
- PHP
- HTML5
- CSS3
- JavaScript

---

## Security & Authentication

- Session Management
- Authentication Systems
- Secure Cookie Handling
- Access Control
- Input Validation
- Secure Coding Practices

---

## Containerization & Deployment

- Docker
- Docker Compose
- Docker Networking
- Container Isolation
- Volume Management

---

## Security Testing & Labs

- DVWA (Damn Vulnerable Web Application)
- Web Security Testing
- Vulnerability Analysis
- Secure vs Vulnerable Application Comparison

---

# 📂 Folder Structure

```text
docker-practicals/
├── auth-system-web/
├── auth-secure-system-web/
├── auth-session-secure-system-web/
├── session-lab-web/
├── session-lab-vulnerable/
├── session-lab-secure/
└── dvwa/
```

---

# 📘 Practicals Included

| Folder | Purpose |
|---|---|
| `auth-system-web` | Basic authentication-based web application |
| `auth-secure-system-web` | Secure version of authentication system |
| `auth-session-secure-system-web` | Secure authentication with session protection |
| `session-lab-web` | Session management practical |
| `session-lab-vulnerable` | Vulnerable session handling implementation |
| `session-lab-secure` | Secure session handling implementation |
| `dvwa` | Damn Vulnerable Web Application security lab |

---

# 💻 System Requirements

Before running these practicals, install:

- Docker
- Docker Compose
- Git

---

# 🔍 Verify Installation

```bash
docker --version
docker compose version
git --version
```

---

# 📥 Clone Repository

## Using SSH

```bash
git clone git@github.com:code-with-nc/Secure_coding-practices.git
cd Secure_coding-practices/docker-practicals
```

---

## Using HTTPS

```bash
git clone https://github.com/code-with-nc/Secure_coding-practices.git
cd Secure_coding-practices/docker-practicals
```

---

# 🐳 How to Run Docker Practicals

The execution process is almost the same for every practical.

---

# ⚙️ Step-by-Step Execution Process

---

## Step 1️⃣ Go Inside Practical Folder

Example:

```bash
cd auth-system-web
```

---

## Step 2️⃣ Build Docker Image

```bash
docker build -t auth-system-web .
```

### What This Does

- Reads Dockerfile
- Creates Docker image
- Installs dependencies
- Packages the application

---

## Step 3️⃣ Run Docker Container

```bash
docker run -p 8080:80 auth-system-web
```

### What This Does

- Starts container
- Maps:
  - Local Port → 8080
  - Container Port → 80

---

## Step 4️⃣ Open in Browser

```text
http://localhost:8080
```

---

# 🧪 Example Practical Executions

---

# 🔐 Example 1 – Basic Authentication Lab

```bash
cd docker-practicals/auth-system-web

docker build -t auth-system-web .

docker run -p 8080:80 auth-system-web
```

Open:

```text
http://localhost:8080
```

---

# 🛡️ Example 2 – Secure Authentication Lab

```bash
cd docker-practicals/auth-secure-system-web

docker build -t auth-secure-system-web .

docker run -p 8081:80 auth-secure-system-web
```

Open:

```text
http://localhost:8081
```

---

# 🔑 Example 3 – Secure Session Authentication Lab

```bash
cd docker-practicals/auth-session-secure-system-web

docker build -t auth-session-secure-system-web .

docker run -p 8082:80 auth-session-secure-system-web
```

Open:

```text
http://localhost:8082
```

---

# ⚠️ Example 4 – Vulnerable Session Lab

```bash
cd docker-practicals/session-lab-vulnerable

docker build -t session-lab-vulnerable .

docker run -p 8083:80 session-lab-vulnerable
```

Open:

```text
http://localhost:8083
```

---

# ✅ Example 5 – Secure Session Lab

```bash
cd docker-practicals/session-lab-secure

docker build -t session-lab-secure .

docker run -p 8084:80 session-lab-secure
```

Open:

```text
http://localhost:8084
```

---

# 💀 Example 6 – DVWA Security Lab

```bash
cd docker-practicals/dvwa

docker build -t dvwa-lab .

docker run -p 8085:80 dvwa-lab
```

Open:

```text
http://localhost:8085
```

---

# 🐳 Running with Docker Compose

Some folders may contain:

```text
docker-compose.yml
```

---

## Start Containers

```bash
docker compose up --build
```

---

## Run in Background

```bash
docker compose up -d
```

---

## Stop Containers

```bash
docker compose down
```

---

# 📊 Useful Docker Commands

---

## List Running Containers

```bash
docker ps
```

---

## List All Containers

```bash
docker ps -a
```

---

## Stop Container

```bash
docker stop <container_id>
```

---

## Remove Container

```bash
docker rm <container_id>
```

---

## List Docker Images

```bash
docker images
```

---

## Remove Docker Image

```bash
docker rmi <image_name>
```

---

## View Logs

```bash
docker logs <container_id>
```

---

## Clean Unused Docker Resources

```bash
docker system prune
```

---

# 🔬 Suggested Learning Workflow

---

# Phase 1️⃣ – Authentication Security

Run:

```text
auth-system-web
auth-secure-system-web
auth-session-secure-system-web
```

Learn:

- Login implementation
- Password handling
- Secure authentication
- Authentication bypass risks
- Secure coding improvements

---

# Phase 2️⃣ – Session Security

Run:

```text
session-lab-vulnerable
session-lab-secure
```

Learn:

- Session fixation
- Cookie security
- Session hijacking risks
- Secure session handling
- Session timeout protection

---

# Phase 3️⃣ – Vulnerability Testing

Run:

```text
dvwa
```

Practice:

- SQL Injection
- Cross-Site Scripting (XSS)
- CSRF
- File Upload Vulnerabilities
- Authentication Weaknesses
- Command Injection

---

# 🎯 Learning Objectives

After completing these Docker practicals, learners will be able to:

- Understand Docker-based application deployment
- Build and run containerized web applications
- Analyze secure and insecure authentication systems
- Understand session management vulnerabilities
- Compare vulnerable vs secure coding implementations
- Perform basic web application security testing
- Understand Docker networking and port mapping
- Use Docker containers for isolated cyber security labs
- Practice secure coding concepts in real-world scenarios
- Understand common OWASP-related vulnerabilities

---

# ⚠️ Troubleshooting

---

# Port Already in Use

If you get:

```text
port is already allocated
```

Use another port:

```bash
docker run -p 8090:80 auth-system-web
```

Open:

```text
http://localhost:8090
```

---

# Permission Denied Error

Use:

```bash
sudo docker build -t lab-name .
sudo docker run -p 8080:80 lab-name
```

OR add current user to Docker group:

```bash
sudo usermod -aG docker $USER
newgrp docker
```

---

# Container Stops Immediately

Check logs:

```bash
docker ps -a
docker logs <container_id>
```

---

# Docker Build Failure

Rebuild image:

```bash
docker build --no-cache -t auth-system-web .
```

---

# 🔒 Security Notice

These labs are created strictly for:

- educational purposes
- cyber security training
- secure coding practice
- authorized testing

Do NOT expose vulnerable containers on public networks or production systems.

Always run labs inside isolated local environments.

---

# 👩‍💻 Author

**Narayani**  
GitHub: [code-with-nc](https://github.com/code-with-nc)

---
