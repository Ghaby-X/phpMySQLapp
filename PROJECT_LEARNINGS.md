# PHP MySQL Application - Project Learning Documentation

## Project Overview
This project was assigned as a hands-on exercise to build and containerize a LAMP stack web application for managing books and movies. The exercise focused on understanding full-stack development, database integration, containerization, and cloud deployment practices.

## Learning Objectives Achieved

### 1. LAMP Stack Understanding
- **Linux**: Used as the base operating system in Docker containers
- **Apache**: Web server configuration and mod_rewrite setup
- **MySQL**: Database design, relationships, and query optimization
- **PHP**: Server-side scripting, database connections, and dynamic content generation

### 2. Database Design & Management
- Created normalized database schema with proper relationships
- Implemented separate tables for books, films, categories, and genres
- Used junction tables for many-to-many relationships
- Applied environment variables for database configuration flexibility

### 3. Containerization with Docker
- Built optimized Dockerfile with proper layer caching
- Implemented multi-stage builds and Alpine Linux for size reduction
- Used .dockerignore to exclude unnecessary files
- Configured proper signal handling with tini init system
- Reduced image size from 1.44GB to ~300MB through optimization

### 4. Environment Configuration
- Implemented environment variable management for different deployment scenarios
- Configured database connections to work with both local and cloud databases
- Set up proper fallback values for development environments

### 5. Cloud Integration
- Connected application to AWS RDS MySQL instance
- Prepared application for deployment using AWS Copilot
- Configured ECS deployment with load balancer

## Technical Implementation Details

### File Structure Analysis
```
phpMySQLapp/
├── books/                  # Book management module
│   ├── functions/         # Database operations for books
│   ├── includes/          # Database connection
│   └── home.php          # Book interface
├── movies/                # Movie management module
│   ├── functions/         # Database operations for movies
│   ├── includes/          # Database connection
│   └── home.php          # Movie interface
├── mySqlDB/              # Database schema and seed data
├── admin_area/           # Administrative functions
├── Dockerfile            # Container configuration
└── README.md            # Project documentation
```

### Key Code Improvements Made
1. **Database Abstraction**: Replaced hardcoded database names with environment variables
2. **Connection Management**: Centralized database connection logic
3. **Error Handling**: Improved error messages and connection validation
4. **Security**: Used environment variables for sensitive data

### Docker Optimization Journey
- **Initial Image**: 1.44GB (inefficient layering)
- **Optimized Image**: ~300MB (proper layer caching, cleanup commands)
- **Key Optimizations**:
  - Combined RUN commands to reduce layers
  - Added cleanup commands to remove package caches
  - Implemented .dockerignore for build context optimization
  - Added tini for proper signal handling

## Screenshot Documentation

### Application UI (app_ui.png)
The main interface screenshot demonstrates:
- Clean, responsive web design
- Navigation between books and movies sections
- Search functionality implementation
- Filter options by various criteria (genre, country, author/director, year)
- Table-based data presentation with proper formatting

### Architecture Diagram (architecture1.png)
The architecture diagram illustrates:
- Three-tier application architecture
- Web tier: Apache HTTP server serving PHP application
- Application tier: PHP processing business logic
- Data tier: MySQL database with proper schema design
- Load balancer configuration for scalability
- Cloud deployment architecture using AWS services

## Challenges Encountered & Solutions

### 1. Database Connection Issues
**Problem**: Application couldn't connect to database in containerized environment
**Solution**: Implemented environment variable-based configuration with proper fallbacks

### 2. Docker Image Size
**Problem**: Initial Docker image was 1.44GB
**Solution**: Applied Docker best practices, used proper layering, and cleanup commands

### 3. Signal Handling
**Problem**: Application would shut down unexpectedly due to SIGWINCH signals
**Solution**: Implemented tini as init system to properly handle container signals

### 4. Environment Variable Loading
**Problem**: Environment variables not being loaded properly in PHP
**Solution**: Used $_ENV superglobal with null coalescing operator for fallbacks

## Best Practices Learned

### Docker Best Practices
- Use multi-stage builds when possible
- Combine RUN commands to reduce layers
- Place frequently changing operations (COPY) at the end
- Use .dockerignore to optimize build context
- Implement proper init systems for signal handling

### PHP Development
- Use environment variables for configuration
- Implement proper error handling
- Separate concerns (database, business logic, presentation)
- Use prepared statements for security (future improvement)

### Database Design
- Normalize data to reduce redundancy
- Use proper foreign key relationships
- Implement consistent naming conventions
- Plan for scalability with proper indexing

## Future Improvements Identified
1. Implement prepared statements for SQL injection prevention
2. Add input validation and sanitization
3. Implement user authentication and authorization
4. Add caching layer (Redis) for better performance
5. Implement proper logging and monitoring
6. Add unit and integration tests
7. Implement CI/CD pipeline

## Conclusion
This project provided comprehensive hands-on experience with full-stack web development, containerization, and cloud deployment. The exercise successfully demonstrated the integration of multiple technologies in a real-world scenario, from database design to production deployment considerations.

The iterative improvement process, especially in Docker optimization and environment configuration, highlighted the importance of following best practices and continuous refinement in software development.