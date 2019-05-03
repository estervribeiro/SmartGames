package br.senai.sp.api.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import br.senai.sp.api.model.Jogo;

public interface JogoRepository extends JpaRepository<Jogo, Long> {

}
