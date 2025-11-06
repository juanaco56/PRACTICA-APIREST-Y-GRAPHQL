package com.example.ATP.controller;

import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.RequestMapping;
import com.example.ATP.entity.tenistas;
import com.example.ATP.repository.tenistasRepository;
import java.util.List;

@RestController
@RequestMapping("/api/tenistas")
@CrossOrigin(origins = "*")  // ✅ Permite acceso desde cualquier origen
public class tenistasController {
    private tenistasRepository tenistasRepository;

    public tenistasController(tenistasRepository tenistasRepository){
        this.tenistasRepository = tenistasRepository;
    }

    @GetMapping("/listado")
    public List<tenistas> listado() {
        return tenistasRepository.findAll();
    }
}
