import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet } from '@angular/router';
import { ApiService } from './api.service';


@Component({
  selector: 'app-root',
  standalone: true,
  imports: [CommonModule, RouterOutlet],
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  title = 'portfolio-frontend';
  profileData: any;

  constructor(private apiService: ApiService) {}

  ngOnInit(): void {
    this.apiService.getProfileData().subscribe((data) => {
      this.profileData = data;
    });
  }
}
