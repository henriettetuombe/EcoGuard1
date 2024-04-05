# EcoGuard

## Description

EcoGuard is a comprehensive environmental monitoring and protection platform aimed at addressing environmental issues, particularly focused on afforestation efforts in Africa. It leverages technology and community development to bridge the gap between people and ecological preservation. The platform supports soil protection, biodiversity, and carbon sequestration through the strategic planting of native trees. EcoGuard encourages active participation in climate change mitigation by providing immersive experiences and engagement opportunities, contributing to the global effort to safeguard the environment for future generations.

## Setup Instructions

### Prerequisites

- XAMPP installed on your system (includes PHP and MySQL)
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

### Database Setup

1. Start the Apache and MySQL services using XAMPP control panel.

2. Create a new database for EcoGuard using phpMyAdmin or any MySQL client of your choice.

3. Set up your environmental variables. Create a `.env` file in the root directory of the project and add the following variables:

    ```plaintext
    # Example .env file
    SECRET_KEY=your_secret_key
    DB_HOST=localhost
    DB_NAME=ecoguard_db
    DB_USER=root
    DB_PASSWORD=
    ```

    Replace `your_secret_key` with a secure secret key for your application, and update the database-related variables accordingly.

### Running the Application

1. Place the EcoGuard directory in the `htdocs` folder of your XAMPP installation.

2. Access EcoGuard in your web browser at `http://localhost/EcoGuard`.

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
