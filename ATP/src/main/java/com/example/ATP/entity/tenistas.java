package com.example.ATP.entity;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
public class tenistas {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY) // Usado con MySQL para auto-incrementar
    private long id;

    private String nombre;
    private String apellidos;
    private int edad;
    private long puntos_atp;
    private int ranking_atp;
    private String nacionalidad;

    // Getters y Setters
    public long getId() {
        return id;
    }
    public void setId(long id) {
        this.id = id;
    }
    public String getNombre() {
        return nombre;
    }
    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    public String getApellidos() {
        return apellidos;
    }
    public void setApellidos(String apellidos) {
        this.apellidos = apellidos;
    }
    public int getEdad() {
        return edad;
    }
    public void setEdad(int edad) {
        this.edad = edad;
    }
    public long getPuntos_atp() {
        return puntos_atp;
    }
    public void setPuntos_atp(long puntos_atp) {
        this.puntos_atp = puntos_atp;
    }
    public int getRanking_atp() {
        return ranking_atp;
    }
    public void setRanking_atp(int ranking_atp) {
        this.ranking_atp = ranking_atp;
    }
    public String getNacionalidad() {
        return nacionalidad;
    }
    public void setNacionalidad(String nacionalidad) {
        this.nacionalidad = nacionalidad;
    }
}
