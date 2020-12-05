# Use the official Python image.
# https://hub.docker.com/_/python
FROM python:3.6

# Copy local code to the container image.
ENV APP_HOME /app
WORKDIR $APP_HOME
COPY . .

# Install production dependencies.
RUN pip install python-telegram-bot flask gunicorn opencensus opencensus-context opencensus-ext-stackdriver boto3 google-cloud-datastore webob jwt PyJWT google-cloud-pubsub google-cloud-speech rpyc python-dateutil google-cloud-logging pillow geopy google-cloud-translate google-cloud-trace google-cloud-texttospeech

# Run the web service on container startup. Here we use the gunicorn
# webserver, with one worker process and 8 threads.
# For environments with multiple CPU cores, increase the number of workers
# to be equal to the cores available.
CMD exec gunicorn --bind :$PORT --workers 8 run:app

# Deployment Command to GCP Cloud Run
# 0. gcloud init
# 1. gcloud config get-value project
# 2. gcloud builds submit --tag gcr.io/baby-islands-test/babysitter_admin_console
# 3. gcloud beta run deploy --image gcr.io/baby-islands-test/babysitter_admin_console