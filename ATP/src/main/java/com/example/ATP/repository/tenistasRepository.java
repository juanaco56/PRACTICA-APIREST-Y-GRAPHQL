package com.example.ATP.repository;

import com.example.ATP.entity.tenistas;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository 
public interface tenistasRepository extends JpaRepository <tenistas, Long> {

}
