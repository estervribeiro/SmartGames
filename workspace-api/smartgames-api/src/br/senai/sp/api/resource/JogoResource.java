package br.senai.sp.api.resource;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import br.senai.sp.api.model.Jogo;
import br.senai.sp.api.repository.JogoRepository;

@RestController
@RequestMapping("/jogos")
public class JogoResource {
	
	
	@Autowired
	private JogoRepository jogoRepository;
	
	//pegando os dados do banco
	@GetMapping
	public List<Jogo> getJogos(){
		return jogoRepository.findAll();
	}

	
	
	
	
	
	

}
