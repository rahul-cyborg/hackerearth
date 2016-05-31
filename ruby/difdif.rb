
def split_word(s)
  (0..s.length).inject([]){|ai,i|
    (1..s.length - i).inject(ai){|aj,j|
      aj << s[i,j]
    }
  }.uniq
end

str = gets.chomp.strip.to_s
puts split_word(str).length



