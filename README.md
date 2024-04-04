# EcoGuard

## Description

EcoGuard is a comprehensive environmental monitoring and protection platform aimed at addressing environmental issues, particularly focused on afforestation efforts in Africa. It leverages technology and community development to bridge the gap between people and ecological preservation. The platform supports soil protection, biodiversity, and carbon sequestration through the strategic planting of native trees. EcoGuard encourages active participation in climate change mitigation by providing immersive experiences and engagement opportunities, contributing to the global effort to safeguard the environment for future generations.

## Setup Instructions

### Prerequisites

- Python 3.x installed on your system
- PostgreSQL installed and running on your machine
- Git installed on your system

### Installation

1. Clone the EcoGuard repository to your local machine:

    ```bash
    git clone https://github.com/henriettetuombe/EcoGuard.git
    ```

2. Navigate to the project directory:

    ```bash
    cd EcoGuard
    ```

3. Create and activate a virtual environment:

    ```bash
    # Using virtualenv
    virtualenv venv
    source venv/bin/activate

    # Using venv
    python3 -m venv venv
    source venv/bin/activate
    ```

4. Install the required dependencies:

    ```bash
    pip install -r requirements.txt
    ```

### Database Setup

1. Create a new PostgreSQL database for EcoGuard:

    ```bash
    createdb ecoguard_db
    ```

2. Set up your environmental variables. Create a `.env` file in the root directory of the project and add the following variables:

    ```plaintext
    # Example .env file
    SECRET_KEY=your_secret_key
    DATABASE_URL=postgres://username:password@localhost/ecoguard_db
    ```

    Replace `your_secret_key` with a secure secret key for your Django application, `username` and `password` with your PostgreSQL credentials, and `ecoguard_db` with the name of your PostgreSQL database.

3. Apply migrations to create the database schema:

    ```bash
    python manage.py makemigrations
    python manage.py migrate
    ```

### Running the Application

1. Start the Django development server:

    ```bash
    python manage.py runserver
    ```

2. Access EcoGuard in your web browser at `http://localhost:8000`.

## Usage

- Use EcoGuard to monitor environmental data, visualize real-time information, track wildlife, and engage in community initiatives for environmental protection.

## Contributing

Thank you for considering contributing to EcoGuard! To contribute, please follow these steps:

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/YourFeature`).
3. Commit your changes (`git commit -am 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeature`).
5. Create a new Pull Request.

## License

This project is licensed under the [MIT License](LICENSE).
