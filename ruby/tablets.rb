n =  gets.chomp.strip.to_i

input = []

n.times do
  input << gets.chomp.strip.to_i
end

out = []
out[0] = 1

(1...input.length).each do |i|
  if input[i] > input[i - 1]
    out[i] = out[i - 1] + 1
  else
    out[i] = 1
  end
end


var = input.length - 2
r = var..0
(r.first).downto(r.last).each do |i|
  if input[i] > input[i + 1] && out[i] <= out[i + 1]
    out[i] = out[i + 1] + 1
  end
end


puts out.inject{|sum,x| sum + x } 