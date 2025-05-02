# Use official Node image
FROM node:18

WORKDIR /app

# Install Angular CLI
RUN npm install -g @angular/cli

# Expose port 4200
EXPOSE 4200

# Start Angular dev server
CMD ["ng", "serve", "--host", "0.0.0.0", "--port", "4200", "--disable-host-check"]

CMD ["tail", "-f", "/dev/null"]
