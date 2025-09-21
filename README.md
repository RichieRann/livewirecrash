# Livewire & Collaboration Learning Project

Welcome to this collaborative learning space! This project is a hands-on environment for exploring **Laravel Livewire** and practicing modern **team workflows** using Git and GitHub.

## 🚀 Getting Started

To get this project running on your local machine, follow these simple steps.

### Prerequisites

Make sure you have the following installed on your system:

-   **PHP** (version 8.1 or higher is recommended)
-   **Composer**
-   **Node.js & npm**
-   **Git**

### Installation

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/RichieRann/livewirecrash.git](https://github.com/RichieRann/livewirecrash.git)
    ```

2.  **Navigate into the project directory:**

    ```bash
    cd livewirecrash
    ```

3.  **Install PHP dependencies:**

    ```bash
    composer install
    ```

4.  **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

5.  **Set up your environment file:**
    Copy the `.env.example` file to create your own `.env` file.

    ```bash
    cp .env.example .env
    ```

6.  **Generate a new application key:**

    ```bash
    php artisan key:generate
    ```

7.  **Run migrations:**

    ```bash
    php artisan migrate
    ```

8.  **Start the development server:**
    ```bash
    npm run dev
    ```
    Your application will now be running at `http://127.0.0.1:8000`/`http://livewirecrash.test/`.

## 🤝 How to Collaborate

This project is for practicing teamwork! Here's the workflow we'll be using:

1.  **Pull the latest changes** from the `main` branch before you start working.
2.  **Create a new branch** for your feature or bug fix:
    ```bash
    FEATURE BRANCH: git checkout -b feature/your-branch-name
    BUG FIX BRANCH: git checkout -b bugfix/your-branch-name
    ```
3.  **Make your changes**, then commit them with a clear message.
4.  **Push your branch** to GitHub.
5.  **Open a Pull Request** to merge your changes into the `main` branch.

This approach ensures a smooth and organized development process.

## ✨ Project Goals

-   Understand the fundamentals of **Livewire** components, properties, and events.
-   Practice good **version control\*\*** habits.
-   Learn how to resolve **merge conflicts** and conduct **code reviews**.
-   Build a foundation for future full-stack applications.
