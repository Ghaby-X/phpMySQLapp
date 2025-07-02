variable "project_name" {
  description = "The name of the project"
  type        = string
  default     = "owby"
}

variable "default_tags" {
  description = "Default tags to apply to all resources"
  type        = map(string)
  default     = {
    Terraform   = "true"
    Environment = "dev"
    project = "owby"
  }
}

