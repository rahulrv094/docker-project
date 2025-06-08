# Step 1: Use an official Python runtime as a parent image
FROM python:3.9-slim

# Step 2: Set the working directory in the container
WORKDIR /usr/src/app

# Step 3: Copy the requirements.txt first to leverage Docker's caching
COPY testfolder/requirements.txt .

# Step 4: Install dependencies
RUN pip install --no-cache-dir -r requirements.txt

# Step 5: Copy the rest of your application
COPY testfolder/ .

# Step 6: Expose the port your app runs on
EXPOSE 5000

# Step 7: Define the command to run your app
CMD ["python", "app.py"]
