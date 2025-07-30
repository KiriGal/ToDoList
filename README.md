
# 📝 Laravel To-Do API

Простой REST API для управления задачами (To-Do), разработанный на Laravel.

## 🚀 Возможности

- Создание задачи
- Просмотр всех задач
- Просмотр конкретной задачи
- Обновление задачи (полное и частичное)
- Удаление задачи
- Поддержка enum-статусов:
  - `Accepted`
  - `In Progress`
  - `Completed`
  - `Cancelled`

## 📦 Установка

```bash
git clone https://github.com/your-username/todo-api.git
cd todo-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
````

## ▶️ Запуск

```bash
php artisan serve
```

## 🔗 API Маршруты

| Метод  | URL               | Описание              |
| ------ | ----------------- | --------------------- |
| GET    | `/api/tasks`      | Получить все задачи   |
| POST   | `/api/tasks`      | Создать новую задачу  |
| GET    | `/api/tasks/{id}` | Получить задачу по ID |
| PUT    | `/api/tasks/{id}` | Обновить задачу       |
| PATCH  | `/api/tasks/{id}` | Частично обновить     |
| DELETE | `/api/tasks/{id}` | Удалить задачу        |

## 📂 Структура проекта

```
app/
├── Actions/
│   ├── CreateNewTask.php
│   ├── UpdateTask.php
│   └── DeleteTask.php
├── Enums/
│   └── TaskStatus.php
├── Http/
│   ├── Controllers/
│   │   └── TaskController.php
│   ├── Requests/
│   │   ├── StoreTaskRequest.php
│   │   └── UpdateTaskRequest.php
├── Models/
│   └── Task.php
```
