import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class HomeService {
  private apiUrl = 'http://127.0.0.1:8000/api';

  constructor(private http:HttpClient) { }

  getProfileData(): Observable<any> {
    const url = `${this.apiUrl}/profile`;
    return this.http.get<any>(url);
  }

  editProfile(profileData: any): Observable<any> {
    const rut = "199518356";
    const url = `${this.apiUrl}/editar-perfil/${rut}`; 
    return this.http.put(url, profileData);
  }
}
